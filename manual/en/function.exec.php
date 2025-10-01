<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: exec - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.exec.php">
 <link rel="shorturl" href="https://www.php.net/exec">
 <link rel="alternate" href="https://www.php.net/exec" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.escapeshellcmd.php">
 <link rel="next" href="https://www.php.net/manual/en/function.passthru.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.exec.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.exec.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.exec.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.exec.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.exec.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.exec.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.exec.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.exec.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.exec.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.exec.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.exec.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute an external program" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: exec - Manual" />
<meta name="twitter:description" content="Execute an external program" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: exec - Manual" />
<meta itemprop="description" content="Execute an external program" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute an external program" />

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
        <a href="function.passthru.php">
          passthru &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.escapeshellcmd.php">
          &laquo; escapeshellcmd        </a>
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
            <option value='en/function.exec.php' selected="selected">English</option>
            <option value='de/function.exec.php'>German</option>
            <option value='es/function.exec.php'>Spanish</option>
            <option value='fr/function.exec.php'>French</option>
            <option value='it/function.exec.php'>Italian</option>
            <option value='ja/function.exec.php'>Japanese</option>
            <option value='pt_BR/function.exec.php'>Brazilian Portuguese</option>
            <option value='ru/function.exec.php'>Russian</option>
            <option value='tr/function.exec.php'>Turkish</option>
            <option value='uk/function.exec.php'>Ukrainian</option>
            <option value='zh/function.exec.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.exec" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">exec</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">exec</span> &mdash; <span class="dc-title">Execute an external program</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.exec-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>exec</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>, <span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$output</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$result_code</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>exec()</strong></span> executes the given
   <code class="parameter">command</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.exec-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The command that will be executed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">output</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">output</code> argument is present, then the
       specified array will be filled with every line of output from the
       command.  Trailing whitespace, such as <code class="literal">\n</code>, is not
       included in this array.  Note that if the array already contains some
       elements, <span class="function"><strong>exec()</strong></span> will append to the end of the array.
       If you do not want the function to append elements, call
       <span class="function"><a href="function.unset.php" class="function">unset()</a></span> on the array before passing it to
       <span class="function"><strong>exec()</strong></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">result_code</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">result_code</code> argument is present
       along with the <code class="parameter">output</code> argument, then the
       return status of the executed command will be written to this
       variable.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.exec-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The last line from the result of the command.  If you need to execute a 
   command and have all the data from the command passed directly back without 
   any interference, use the <span class="function"><a href="function.passthru.php" class="function">passthru()</a></span> function.
  </p>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
  <p class="para">
   To get the output of the executed command, be sure to set and use the
   <code class="parameter">output</code> parameter.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.exec-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Emits an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> if <span class="function"><strong>exec()</strong></span>
   is unable to execute the <code class="parameter">command</code>.
  </p>
  <p class="para">
   Throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> if <code class="parameter">command</code>
   is empty or contains null bytes.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.exec-changelog">
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
       If <code class="parameter">command</code> is empty or contains null bytes,
       <span class="function"><strong>exec()</strong></span> now throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>.
       Previously it emitted an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> and returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.exec-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3602">
    <p><strong>Example #1 An <span class="function"><strong>exec()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// outputs the username that owns the running php/httpd process<br />// (on a system with the "whoami" executable in the path)<br /></span><span style="color: #0000BB">$output</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$retval</span><span style="color: #007700">=</span><span style="color: #0000BB">null</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">exec</span><span style="color: #007700">(</span><span style="color: #DD0000">'whoami'</span><span style="color: #007700">, </span><span style="color: #0000BB">$output</span><span style="color: #007700">, </span><span style="color: #0000BB">$retval</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">"Returned with status </span><span style="color: #0000BB">$retval</span><span style="color: #DD0000"> and output:\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$output</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Returned with status 0 and output:
Array
(
    [0] =&gt; cmb
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.exec-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong><p class="para">When allowing user-supplied data to be
passed to this function, use
<span class="function"><a href="function.escapeshellarg.php" class="function">escapeshellarg()</a></span> or <span class="function"><a href="function.escapeshellcmd.php" class="function">escapeshellcmd()</a></span>
to ensure that users cannot trick the system into executing arbitrary
commands.</p></div>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">If a program is started with this function,
in order for it to continue running in the background, the output of the
program must be redirected to a file or another output stream. Failing to do so
will cause PHP to hang until the execution of the program ends.</p></p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: <p class="para">On Windows <span class="function"><strong>exec()</strong></span>
will first start cmd.exe to launch the command. If you want to start an external program without starting cmd.exe
use <span class="function"><a href="function.proc-open.php" class="function">proc_open()</a></span> with the <code class="parameter">bypass_shell</code> option set.</p></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.exec-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.system.php" class="function" rel="rdfs-seeAlso">system()</a> - Execute an external program and display the output</span></li>
    <li><span class="function"><a href="function.passthru.php" class="function" rel="rdfs-seeAlso">passthru()</a> - Execute an external program and display raw output</span></li>
    <li><span class="function"><a href="function.escapeshellcmd.php" class="function" rel="rdfs-seeAlso">escapeshellcmd()</a> - Escape shell metacharacters</span></li>
    <li><span class="function"><a href="function.pcntl-exec.php" class="function" rel="rdfs-seeAlso">pcntl_exec()</a> - Executes specified program in current process space</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/exec.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.exec%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exec.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">22 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86329">  <div class="votes">
    <div id="Vu86329">
    <a href="/manual/vote-note.php?id=86329&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86329">
    <a href="/manual/vote-note.php?id=86329&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86329" title="60% like this...">
    195
    </div>
  </div>
  <a href="#86329" class="name">
  <strong class="user"><em>Arno van den Brink</em></strong></a><a class="genanchor" href="#86329"> &para;</a><div class="date" title="2008-10-13 08:04"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86329">
<div class="phpcode"><code><span class="html">This will execute $cmd in the background (no cmd window) without PHP waiting for it to finish, on both Windows and Unix.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">execInBackground</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">) {
<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">php_uname</span><span class="keyword">(), </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">) == </span><span class="string">"Windows"</span><span class="keyword">){
<br />        </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">popen</span><span class="keyword">(</span><span class="string">"start /B "</span><span class="keyword">. </span><span class="default">$cmd</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">));  
<br />    }
<br />    else {
<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &gt; /dev/null &amp;"</span><span class="keyword">);   
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="128899">  <div class="votes">
    <div id="Vu128899">
    <a href="/manual/vote-note.php?id=128899&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128899">
    <a href="/manual/vote-note.php?id=128899&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128899" title="80% like this...">
    12
    </div>
  </div>
  <a href="#128899" class="name">
  <strong class="user"><em>tsmtgdi at gmail dot com</em></strong></a><a class="genanchor" href="#128899"> &para;</a><div class="date" title="2023-09-19 02:23"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128899">
<div class="phpcode"><code><span class="html">Please be aware that EXEC ignore the stderr!<br /><br />So something like<br /><br />mkdir /impossible path<br /><br />Will fail, and show nothing, you must use<br /><br />mkdir /impossible 2&gt;&amp;1 <br /><br />to properly capture the error message<br /><br />ELSE<br />if executed in CLI, will just print on the terminal, if executed on a browser is lost.<br /><br />I strongly suggested those notes to be added in the main description, and not lost in a comment at the bottom.</span></code></div>
  </div>
 </div>
  <div class="note" id="88704">  <div class="votes">
    <div id="Vu88704">
    <a href="/manual/vote-note.php?id=88704&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88704">
    <a href="/manual/vote-note.php?id=88704&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88704" title="60% like this...">
    82
    </div>
  </div>
  <a href="#88704" class="name">
  <strong class="user"><em>dell_petter at hotmail dot com</em></strong></a><a class="genanchor" href="#88704"> &para;</a><div class="date" title="2009-02-04 02:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88704">
<div class="phpcode"><code><span class="html">(This is for linux users only).<br /><br />We know now how we can fork a process in linux with the &amp; operator.<br />And by using command: nohup MY_COMMAND &gt; /dev/null 2&gt;&amp;1 &amp; echo $! we can return the pid of the process.<br /><br />This small class is made so you can keep in track of your created processes ( meaning start/stop/status ).<br /><br />You may use it to start a process or join an exisiting PID process.<br /><br /><span class="default">&lt;?php<br />    </span><span class="comment">// You may use status(), start(), and stop(). notice that start() method gets called automatically one time.<br />    </span><span class="default">$process </span><span class="keyword">= new </span><span class="default">Process</span><span class="keyword">(</span><span class="string">'ls -al'</span><span class="keyword">);<br /><br />    </span><span class="comment">// or if you got the pid, however here only the status() metod will work.<br />    </span><span class="default">$process </span><span class="keyword">= new </span><span class="default">Process</span><span class="keyword">();<br />    </span><span class="default">$process</span><span class="keyword">.</span><span class="default">setPid</span><span class="keyword">(</span><span class="default">my_pid</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br />    </span><span class="comment">// Then you can start/stop/ check status of the job.<br />    </span><span class="default">$process</span><span class="keyword">.</span><span class="default">stop</span><span class="keyword">();<br />    </span><span class="default">$process</span><span class="keyword">.</span><span class="default">start</span><span class="keyword">();<br />    if (</span><span class="default">$process</span><span class="keyword">.</span><span class="default">status</span><span class="keyword">()){<br />        echo </span><span class="string">"The process is currently running"</span><span class="keyword">;<br />    }else{<br />        echo </span><span class="string">"The process is not running."</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">/* An easy way to keep in track of external processes.<br /> * Ever wanted to execute a process in php, but you still wanted to have somewhat controll of the process ? Well.. This is a way of doing it.<br /> * @compability: Linux only. (Windows does not work).<br /> * @author: Peec<br /> */<br /></span><span class="keyword">class </span><span class="default">Process</span><span class="keyword">{<br />    private </span><span class="default">$pid</span><span class="keyword">;<br />    private </span><span class="default">$command</span><span class="keyword">;<br /><br />    public function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$cl</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">){<br />        if (</span><span class="default">$cl </span><span class="keyword">!= </span><span class="default">false</span><span class="keyword">){<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">command </span><span class="keyword">= </span><span class="default">$cl</span><span class="keyword">;<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runCom</span><span class="keyword">();<br />        }<br />    }<br />    private function </span><span class="default">runCom</span><span class="keyword">(){<br />        </span><span class="default">$command </span><span class="keyword">= </span><span class="string">'nohup '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">command</span><span class="keyword">.</span><span class="string">' &gt; /dev/null 2&gt;&amp;1 &amp; echo $!'</span><span class="keyword">;<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$command </span><span class="keyword">,</span><span class="default">$op</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pid </span><span class="keyword">= (int)</span><span class="default">$op</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />    }<br /><br />    public function </span><span class="default">setPid</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pid </span><span class="keyword">= </span><span class="default">$pid</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">getPid</span><span class="keyword">(){<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pid</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">status</span><span class="keyword">(){<br />        </span><span class="default">$command </span><span class="keyword">= </span><span class="string">'ps -p '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pid</span><span class="keyword">;<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">,</span><span class="default">$op</span><span class="keyword">);<br />        if (!isset(</span><span class="default">$op</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]))return </span><span class="default">false</span><span class="keyword">;<br />        else return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">start</span><span class="keyword">(){<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">command </span><span class="keyword">!= </span><span class="string">''</span><span class="keyword">)</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">runCom</span><span class="keyword">();<br />        else return </span><span class="default">true</span><span class="keyword">;<br />    }<br /><br />    public function </span><span class="default">stop</span><span class="keyword">(){<br />        </span><span class="default">$command </span><span class="keyword">= </span><span class="string">'kill '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">pid</span><span class="keyword">;<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">);<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">status</span><span class="keyword">() == </span><span class="default">false</span><span class="keyword">)return </span><span class="default">true</span><span class="keyword">;<br />        else return </span><span class="default">false</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116222">  <div class="votes">
    <div id="Vu116222">
    <a href="/manual/vote-note.php?id=116222&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116222">
    <a href="/manual/vote-note.php?id=116222&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116222" title="65% like this...">
    47
    </div>
  </div>
  <a href="#116222" class="name">
  <strong class="user"><em>Simon</em></strong></a><a class="genanchor" href="#116222"> &para;</a><div class="date" title="2014-11-24 05:07"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116222">
<div class="phpcode"><code><span class="html">Can’t get the output from your exec’d command to appear in the $output array?<br />Is it echo’ing all over your shell instead?<br /><br />Append "2&gt;&amp;1" to the end of your command, for example:<br /><br />exec("xmllint --noout ~/desktop/test.xml 2&gt;&amp;1", $retArr, $retVal);<br /><br />Will fill the array $retArr with the expected output; one line per array key.</span></code></div>
  </div>
 </div>
  <div class="note" id="127532">  <div class="votes">
    <div id="Vu127532">
    <a href="/manual/vote-note.php?id=127532&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127532">
    <a href="/manual/vote-note.php?id=127532&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127532" title="71% like this...">
    3
    </div>
  </div>
  <a href="#127532" class="name">
  <strong class="user"><em>php dot reg at kjpetrie dot co dot uk</em></strong></a><a class="genanchor" href="#127532"> &para;</a><div class="date" title="2022-08-24 11:00"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127532">
<div class="phpcode"><code><span class="html">If you want to run the command in the background and also use escapeshellcmd() as recommended, ensure you do the redirection outside the brackets! These are things you do want the shell to interpret.<br /><br />E.g. exec(escapeshellcmd('mycommand and arguments').' &gt; /dev/null &amp;');</span></code></div>
  </div>
 </div>
  <div class="note" id="43917">  <div class="votes">
    <div id="Vu43917">
    <a href="/manual/vote-note.php?id=43917&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43917">
    <a href="/manual/vote-note.php?id=43917&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43917" title="59% like this...">
    28
    </div>
  </div>
  <a href="#43917" class="name">
  <strong class="user"><em>msheakoski @t yahoo d@t com</em></strong></a><a class="genanchor" href="#43917"> &para;</a><div class="date" title="2004-07-08 08:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43917">
<div class="phpcode"><code><span class="html">I too wrestled with getting a program to run in the background in Windows while the script continues to execute.  This method unlike the other solutions allows you to start any program minimized, maximized, or with no window at all.  llbra@phpbrasil's solution does work but it sometimes produces an unwanted window on the desktop when you really want the task to run hidden.
<br />
<br />start Notepad.exe minimized in the background:
<br />
<br /><span class="default">&lt;?php
<br />$WshShell </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"WScript.Shell"</span><span class="keyword">);
<br /></span><span class="default">$oExec </span><span class="keyword">= </span><span class="default">$WshShell</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"notepad.exe"</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />start a shell command invisible in the background:
<br /><span class="default">&lt;?php
<br />$WshShell </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"WScript.Shell"</span><span class="keyword">);
<br /></span><span class="default">$oExec </span><span class="keyword">= </span><span class="default">$WshShell</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"cmd /C dir /S %windir%"</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />start MSPaint maximized and wait for you to close it before continuing the script:
<br /><span class="default">&lt;?php
<br />$WshShell </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"WScript.Shell"</span><span class="keyword">);
<br /></span><span class="default">$oExec </span><span class="keyword">= </span><span class="default">$WshShell</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"mspaint.exe"</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />For more info on the Run() method go to:
<br /><a href="http://msdn.microsoft.com/library/en-us/script56/html/wsMthRun.asp" rel="nofollow" target="_blank">http://msdn.microsoft.com/library/en-us/script56/html/wsMthRun.asp</a></span></code></div>
  </div>
 </div>
  <div class="note" id="76687">  <div class="votes">
    <div id="Vu76687">
    <a href="/manual/vote-note.php?id=76687&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76687">
    <a href="/manual/vote-note.php?id=76687&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76687" title="60% like this...">
    10
    </div>
  </div>
  <a href="#76687" class="name">
  <strong class="user"><em>Farhad Malekpour</em></strong></a><a class="genanchor" href="#76687"> &para;</a><div class="date" title="2007-07-26 04:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76687">
<div class="phpcode"><code><span class="html">If you're trying to use exec in a script that uses signal SIGCHLD, (i.e. pcntl_signal(SIGCHLD,'sigHandler');) it will return -1 as the exit code of the command (although output is correct!). To resolve this remove the signal handler and add it again after exec. Code will be something like this:<br /><br />...<br />pcntl_signal(SIGCHLD, 'sigHandler');<br />...<br />...<br />(more codes, functions, classes, etc)<br />...<br />...<br />// Now executing the command via exec<br />// Clear the signal<br />pcntl_signal(SIGCHLD, SIG_DFL);<br />// Execute the command<br />exec('mycommand',$output,$retval);<br />// Set the signal back to our handler<br />pcntl_signal(SIGCHLD, 'sigHandler');<br />// At this point we have correct value of $retval.<br /><br />Same solution can apply to system and passthru as well.</span></code></div>
  </div>
 </div>
  <div class="note" id="99781">  <div class="votes">
    <div id="Vu99781">
    <a href="/manual/vote-note.php?id=99781&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99781">
    <a href="/manual/vote-note.php?id=99781&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99781" title="56% like this...">
    3
    </div>
  </div>
  <a href="#99781" class="name">
  <strong class="user"><em>elwiz at 3e dot pl</em></strong></a><a class="genanchor" href="#99781"> &para;</a><div class="date" title="2010-09-06 06:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99781">
<div class="phpcode"><code><span class="html">On Windows-Apache-PHP servers there is a problem with using the exec command more than once at the same time. If a script (with the exec command) is loaded more than once by the same user at the same time the server will freeze.<br />In my case the PHP script using the exec command was used as the source of an image tag. More than one image in one HTML made the server stop.<br />The problem is described here (<a href="http://bugs.php.net/bug.php?id=44942" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=44942</a>) toghether with a solution - stop the session before the exec command and start it again after it.<br /><br /><span class="default">&lt;?php<br /><br />session_write_close</span><span class="keyword">();<br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">);<br /></span><span class="default">session_start</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119331">  <div class="votes">
    <div id="Vu119331">
    <a href="/manual/vote-note.php?id=119331&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119331">
    <a href="/manual/vote-note.php?id=119331&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119331" title="54% like this...">
    4
    </div>
  </div>
  <a href="#119331" class="name">
  <strong class="user"><em>Paul Sommer</em></strong></a><a class="genanchor" href="#119331"> &para;</a><div class="date" title="2016-05-14 01:33"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119331">
<div class="phpcode"><code><span class="html">I tried to execute a command in background under Windows.<br />After struggling for hours with all these half ready examples I would like to share the syntax I found working (for windows at least). This is not tested under Linux as there are more elegant ways to spawn a process.<br /><br />Based on  the function from Arno van den Brink.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">execInBackground</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">) {<br />    if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">php_uname</span><span class="keyword">(), </span><span class="default">0</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">) == </span><span class="string">"Windows"</span><span class="keyword">){<br />        </span><span class="default">pclose</span><span class="keyword">(</span><span class="default">popen</span><span class="keyword">(</span><span class="string">"start /B "</span><span class="keyword">. </span><span class="default">$cmd</span><span class="keyword">, </span><span class="string">"r"</span><span class="keyword">)); <br />    }<br />    else {<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &gt; /dev/null &amp;"</span><span class="keyword">);  <br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />This works perfectly with e.g.<br /><span class="default">&lt;?php<br />execInBackground</span><span class="keyword">(</span><span class="string">'del c:\tmp\*.*'</span><span class="keyword">) <br /></span><span class="default">?&gt;<br /></span><br />but the following does NOT work:<br /><span class="default">&lt;?php<br />execInBackground</span><span class="keyword">(</span><span class="string">'\"c:\path with spaces\my program.exe\"'</span><span class="keyword">) <br /></span><span class="default">?&gt;<br /></span><br />Why?<br />When windows sees quotation marks (\") it thinks this is the window title, not the command.<br />So, when your command needs quotation marks you HAVE TO provide a window name first, like<br />execInBackground("\"title\"" "\"c:\path with spaces\my program.exe\") <br /><br />Quotation marks are mandatiory for window title. Otherwise windows thinks this is the program name.<br /><br />Weired, but "Hey! it's Windows!" :)</span></code></div>
  </div>
 </div>
  <div class="note" id="57904">  <div class="votes">
    <div id="Vu57904">
    <a href="/manual/vote-note.php?id=57904&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57904">
    <a href="/manual/vote-note.php?id=57904&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57904" title="55% like this...">
    2
    </div>
  </div>
  <a href="#57904" class="name">
  <strong class="user"><em>Bob-PHP at HamsterRepublic dot com</em></strong></a><a class="genanchor" href="#57904"> &para;</a><div class="date" title="2005-10-18 11:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57904">
<div class="phpcode"><code><span class="html">exec strips trailing whitespace off the output of a command. This makes it impossible to capture signifigant whitespace. For example, suppose that a program outputs columns of tab-delimited text, and the last column contains empty fields on some lines. The trailing tabs are important, but get thrown away.<br /><br />If you need to preserve trialing whitespace, you must use popen() instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="124878">  <div class="votes">
    <div id="Vu124878">
    <a href="/manual/vote-note.php?id=124878&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124878">
    <a href="/manual/vote-note.php?id=124878&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124878" title="52% like this...">
    2
    </div>
  </div>
  <a href="#124878" class="name">
  <strong class="user"><em>Hypolite Petovan</em></strong></a><a class="genanchor" href="#124878"> &para;</a><div class="date" title="2020-04-03 03:48"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124878">
<div class="phpcode"><code><span class="html">On Unix, to execute a command $cmd in the background, the one and only allowed standard output redirection syntax is "&gt; /path/to/file &amp;". No other valid standard output redirection syntax will allow a command to be ran in the background.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// The following will be ran in the background<br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &gt; /path/to/file &amp;"</span><span class="keyword">); <br /><br /></span><span class="comment">// All the following will NOT be ran in the background<br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &gt;&gt; /path/to/file &amp;"</span><span class="keyword">); <br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &amp;&gt; /path/to/file &amp;"</span><span class="keyword">); <br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" &amp;&gt;&gt; /path/to/file &amp;"</span><span class="keyword">); <br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" 2&gt;&amp;1 &gt; /path/to/file &amp;"</span><span class="keyword">); <br /></span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd </span><span class="keyword">. </span><span class="string">" 2&gt;&amp;1 &gt;&gt; /path/to/file &amp;"</span><span class="keyword">); <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101837">  <div class="votes">
    <div id="Vu101837">
    <a href="/manual/vote-note.php?id=101837&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101837">
    <a href="/manual/vote-note.php?id=101837&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101837" title="52% like this...">
    3
    </div>
  </div>
  <a href="#101837" class="name">
  <strong class="user"><em>juan at laluca dot com</em></strong></a><a class="genanchor" href="#101837"> &para;</a><div class="date" title="2011-01-13 07:36"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101837">
<div class="phpcode"><code><span class="html">I was trying to get an acceslist from a remote computer by executing cacls and parse it in php, all in a  Windows environment with Apache. First i discovered psexec.exe from Windows SysInternals.<br /><br />But with the following line, I didn´t get anything, it get hunged, although from the command line it worked nice:<br /><br /><span class="default">&lt;?php exec </span><span class="keyword">(</span><span class="string">'c:\\WINDOWS\\system32\\psexec.exe \\192.168.1.224 -u myuser -p mypassword -accepteula cacls c:\\documents\\RRHH &amp;&amp; exit'</span><span class="keyword">, </span><span class="default">$arrACL </span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />To make it work I just followed the next steps:<br />- execute services.msc and find the apache service (In my case wampapache)<br />- Right button&gt;Log On tab and change from Local System Account to a user created account, enter the username and the password and restart the service.<br /><br />(I added this user to the administrators group to avoid permissions problems but its not recommended...)<br /><br />It worked! And it may work with IIS too so try it if you have the same poblem....<br /><br />Hope this helps someone, and sorry for my english</span></code></div>
  </div>
 </div>
  <div class="note" id="18727">  <div class="votes">
    <div id="Vu18727">
    <a href="/manual/vote-note.php?id=18727&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18727">
    <a href="/manual/vote-note.php?id=18727&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18727" title="53% like this...">
    2
    </div>
  </div>
  <a href="#18727" class="name">
  <strong class="user"><em>hans at internit dot NO_SPAM dot com</em></strong></a><a class="genanchor" href="#18727"> &para;</a><div class="date" title="2002-02-02 02:25"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18727">
<div class="phpcode"><code><span class="html">From what I've gathered asking around, there is no way to pass back a perl array into a php script using the exec function. <br /><br />The suggestion is to just print out your perl array variables at the end of your script, and then grabbing each array member from the array returned by the exec function. If you will be passing multiple arrays, or if you need to keep track of array keys as well as values, then as you print each array or hash variable at the end of your perl script, you should concatenate the value with the key and array name, using an underscore, as in:<br /> <br />foreach (@array) print "(array name)_(member_key)_($_)" ;<br /><br />Then you would simply iterate through the array returned by the exec function, and split each variable along the underscore.<br /><br />Here I like to especially thank Marat for the knowledge. Hope this is useful to others in search for similar answer!</span></code></div>
  </div>
 </div>
  <div class="note" id="129008">  <div class="votes">
    <div id="Vu129008">
    <a href="/manual/vote-note.php?id=129008&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129008">
    <a href="/manual/vote-note.php?id=129008&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129008" title="no votes...">
    0
    </div>
  </div>
  <a href="#129008" class="name">
  <strong class="user"><em>mamedul.github.io</em></strong></a><a class="genanchor" href="#129008"> &para;</a><div class="date" title="2023-11-06 11:15"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129008">
<div class="phpcode"><code><span class="html">Cross function solutions for execute command using PHP-<br /><br />function php_exec( $cmd ){<br /><br />    if( function_exists('exec') ){<br />        $output = array();<br />        $return_var = 0;<br />        exec($cmd, $output, $return_var);<br />        return implode( " ", array_values($output) );<br />    }else if( function_exists('shell_exec') ){<br />        return shell_exec($cmd);<br />    }else if( function_exists('system') ){<br />        $return_var = 0;<br />        return system($cmd, $return_var);<br />    }else if( function_exists('passthru') ){<br />        $return_var = 0;<br />        ob_start();<br />        passthru($cmd, $return_var);<br />        $output = ob_get_contents();<br />        ob_end_clean(); //Use this instead of ob_flush()<br />        return $output;<br />    }else  if( function_exists('proc_open') ){<br />        $proc=proc_open($cmd,<br />            array(<br />                array("pipe","r"),<br />                array("pipe","w"),<br />                array("pipe","w")<br />            ),<br />            $pipes);<br />        return stream_get_contents($pipes[1]);<br />    }else{<br />        return "@PHP_COMMAND_NOT_SUPPORT";<br />    }    <br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="128294">  <div class="votes">
    <div id="Vu128294">
    <a href="/manual/vote-note.php?id=128294&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128294">
    <a href="/manual/vote-note.php?id=128294&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128294" title="50% like this...">
    0
    </div>
  </div>
  <a href="#128294" class="name">
  <strong class="user"><em>no at mail dot com</em></strong></a><a class="genanchor" href="#128294"> &para;</a><div class="date" title="2023-03-06 02:37"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128294">
<div class="phpcode"><code><span class="html">&lt;this note copied from system page&gt;<br />This is for WINDOWS users. I am running apache and I have been trying for hours now to capture the output of a command.<br /><br />I'd tried everything that is written here and then continued searching online with no luck at all. The output of the command was never captured. All I got was an empty array.<br /><br />Finally, I found a comment in a blog by a certain amazing guy that solved my problems.<br /><br />Adding the string ' 2&gt;&amp;1' to the command name finally returned the output!! This works in exec() as well as system() in PHP since it uses stream redirection to redirect the output to the correct place!<br /><span class="default">&lt;?php<br />exec</span><span class="keyword">(</span><span class="string">"yourCommandName 2&gt;&amp;1"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="101506">  <div class="votes">
    <div id="Vu101506">
    <a href="/manual/vote-note.php?id=101506&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101506">
    <a href="/manual/vote-note.php?id=101506&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101506" title="51% like this...">
    2
    </div>
  </div>
  <a href="#101506" class="name">
  <strong class="user"><em>Martin Lakes</em></strong></a><a class="genanchor" href="#101506"> &para;</a><div class="date" title="2010-12-21 08:20"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101506">
<div class="phpcode"><code><span class="html">Took quite some time to figure out the line I am going to post next. If you want to execute a command in the background without having the script waiting for the result, you can do the following:<br /><br /><span class="default">&lt;?php<br />passthru</span><span class="keyword">(</span><span class="string">"/usr/bin/php /path/to/script.php "</span><span class="keyword">.</span><span class="default">$argv_parameter</span><span class="keyword">.</span><span class="string">" &gt;&gt; /path/to/log_file.log 2&gt;&amp;1 &amp;"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />There are a few thing that are important here. <br /><br />First of all: put the full path to the php binary, because this command will run under the apache user, and you will probably not have command alias like php set in that user.<br /><br />Seccond: Note 2 things at the end of the command string: the '2&gt;&amp;1' and the '&amp;'. The '2&gt;&amp;1' is for redirecting errors to the standard IO. And the most important thing is the '&amp;' at the end of the command string, which tells the terminal not to wait for a response.<br /><br />Third: Make sure you have 777 permissions on the 'log_file.log' file<br /><br />Enojy!</span></code></div>
  </div>
 </div>
  <div class="note" id="126521">  <div class="votes">
    <div id="Vu126521">
    <a href="/manual/vote-note.php?id=126521&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126521">
    <a href="/manual/vote-note.php?id=126521&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126521" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126521" class="name">
  <strong class="user"><em>krjdev at gmail dot com</em></strong></a><a class="genanchor" href="#126521"> &para;</a><div class="date" title="2021-10-20 09:26"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126521">
<div class="phpcode"><code><span class="html">Note for OpenBSD users:<br /><br />In the default configuration from OpenBSD, PHP runs into a chroot. So the exec() command will not work. You will get a 127 (command not found) result code. The reason is, the shell (/bin/sh) is missing in chroot, but the exec() command requires the shell.<br /><br />A quick and dirty solution is to copy /bin/sh (which is statically linked) in the chroot directory:<br /><span class="default">&lt;?php<br /></span><span class="keyword">$ </span><span class="default">cp </span><span class="keyword">/</span><span class="default">bin</span><span class="keyword">/</span><span class="default">sh </span><span class="keyword">/var/</span><span class="default">www</span><span class="keyword">/</span><span class="default">bin<br />?&gt;<br /></span><br />(I have noticed this on OpenBSD 7.0 with PHP 8.0.11.)</span></code></div>
  </div>
 </div>
  <div class="note" id="125957">  <div class="votes">
    <div id="Vu125957">
    <a href="/manual/vote-note.php?id=125957&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125957">
    <a href="/manual/vote-note.php?id=125957&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125957" title="50% like this...">
    0
    </div>
  </div>
  <a href="#125957" class="name">
  <strong class="user"><em>ivk</em></strong></a><a class="genanchor" href="#125957"> &para;</a><div class="date" title="2021-03-24 01:43"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125957">
<div class="phpcode"><code><span class="html">result_code -1 could mean "Maximum number of file descriptors reached". Check count(get_resources('stream')) and ulimit -Sn</span></code></div>
  </div>
 </div>
  <div class="note" id="101579">  <div class="votes">
    <div id="Vu101579">
    <a href="/manual/vote-note.php?id=101579&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101579">
    <a href="/manual/vote-note.php?id=101579&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101579" title="50% like this...">
    0
    </div>
  </div>
  <a href="#101579" class="name">
  <strong class="user"><em>alvaro at demogracia dot com</em></strong></a><a class="genanchor" href="#101579"> &para;</a><div class="date" title="2010-12-27 05:27"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101579">
<div class="phpcode"><code><span class="html">In Windows, exec() issues an internal call to "cmd /c your_command". This implies that your command must follow the rules imposed by cmd.exe which includes an extra set of quotes around the full command:<br /><br />- <a href="http://ss64.com/nt/cmd.html" rel="nofollow" target="_blank">http://ss64.com/nt/cmd.html</a><br /><br />Current PHP versions take this into account and add the quotes automatically, but old versions didn't.<br /><br />Apparently, the change was made in PHP/5.3.0 yet not backported to 5.2.x because it's a backwards incompatible change. To sum up:<br /><br />- In PHP/5.2 and older you have to surround the full command plus arguments in double quotes<br />- In PHP/5.3 and greater you don't have to (if you do, your script will break)<br /><br />If you are interested in the internals, this is the source code:<br /><br />sprintf(cmd, "%s /c \"%s\"", TWG(comspec), command); <br /><br />It can be found at <a href="http://svn.php.net/viewvc/" rel="nofollow" target="_blank">http://svn.php.net/viewvc/</a> (please find php/php-src/trunk/TSRM/tsrm_win32.c, the comment system doesn't allow the direct link).</span></code></div>
  </div>
 </div>
  <div class="note" id="80582">  <div class="votes">
    <div id="Vu80582">
    <a href="/manual/vote-note.php?id=80582&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80582">
    <a href="/manual/vote-note.php?id=80582&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80582" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#80582" class="name">
  <strong class="user"><em>dr_jones153 at hotmail dot com</em></strong></a><a class="genanchor" href="#80582"> &para;</a><div class="date" title="2008-01-23 07:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80582">
<div class="phpcode"><code><span class="html">If SAFE_MODE is on, and you are trying to run a script in the background by appending "&gt; /dev/null 2&gt; /dev/null &amp; echo $!" to the command line, the browser will hang until the script is done. <br /><br />My solution:<br /><br />Create a shell script (ex. runscript.sh) which contains the execution line for the script you are trying to run in the background. <br />The runscript.sh is run by an exec() call without the redirect string, which is now placed in the runscript.sh. <br /><br />runscript.sh will return almost immediately because output of the original script is redirected, and so will not hang your browser and the script runs fine in the background.</span></code></div>
  </div>
 </div>
  <div class="note" id="49172">  <div class="votes">
    <div id="Vu49172">
    <a href="/manual/vote-note.php?id=49172&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49172">
    <a href="/manual/vote-note.php?id=49172&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49172" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#49172" class="name">
  <strong class="user"><em>layton at layton dot tk</em></strong></a><a class="genanchor" href="#49172"> &para;</a><div class="date" title="2005-01-18 03:52"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49172">
<div class="phpcode"><code><span class="html">This is the second time this one got me, I thought someone else might find this note useful too.<br /><br />I am creating a long running exec'd process that I can access with page submissions up to 2 hours later. The problem is this, the first time I access the page everything works like it should. The second time the web browser waits and waits and never gets any messages -- the CPU time is not affected so it is apparent that something is blocked.<br /><br />What is actually happening is that all of the open files are being copied to the exec'd process -- including the network connections. So the second time I try to access the web page, I am being given the old http network connection which is now being ignored.<br /><br />The solution is to scan all file handles from 3 on up and close them all. Remember that handles 0, 1, and 2 are standard input, standard output, and standard error.</span></code></div>
  </div>
 </div>
  <div class="note" id="89716">  <div class="votes">
    <div id="Vu89716">
    <a href="/manual/vote-note.php?id=89716&amp;page=function.exec&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89716">
    <a href="/manual/vote-note.php?id=89716&amp;page=function.exec&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89716" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#89716" class="name">
  <strong class="user"><em>bahri at bahri dot info</em></strong></a><a class="genanchor" href="#89716"> &para;</a><div class="date" title="2009-03-20 01:15"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89716">
<div class="phpcode"><code><span class="html">[NOTE BY danbrown AT php DOT net: The following is a Linux script that the contributor of this note suggests be placed in a file named 'pstools.inc.php' to execute a process, check if a process exists, and kill a process by ID.  Inspired by the Windows version at <a href="http://php.net/exec#59428" rel="nofollow" target="_blank">http://php.net/exec#59428</a> ]
<br />
<br />
<br /><span class="default">&lt;?php
<br />  </span><span class="keyword">function </span><span class="default">PsExecute</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">, </span><span class="default">$timeout </span><span class="keyword">= </span><span class="default">60</span><span class="keyword">, </span><span class="default">$sleep </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">) {
<br />        </span><span class="comment">// First, execute the process, get the process ID
<br />
<br />        </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">PsExec</span><span class="keyword">(</span><span class="default">$command</span><span class="keyword">);
<br />
<br />        if( </span><span class="default">$pid </span><span class="keyword">=== </span><span class="default">false </span><span class="keyword">)
<br />            return </span><span class="default">false</span><span class="keyword">;
<br />
<br />        </span><span class="default">$cur </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />        </span><span class="comment">// Second, loop for $timeout seconds checking if process is running
<br />        </span><span class="keyword">while( </span><span class="default">$cur </span><span class="keyword">&lt; </span><span class="default">$timeout </span><span class="keyword">) {
<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$sleep</span><span class="keyword">);
<br />            </span><span class="default">$cur </span><span class="keyword">+= </span><span class="default">$sleep</span><span class="keyword">;
<br />            </span><span class="comment">// If process is no longer running, return true;
<br />
<br />           </span><span class="keyword">echo </span><span class="string">"\n ---- </span><span class="default">$cur</span><span class="string"> ------ \n"</span><span class="keyword">;
<br />
<br />            if( !</span><span class="default">PsExists</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">) )
<br />                return </span><span class="default">true</span><span class="keyword">; </span><span class="comment">// Process must have exited, success!
<br />        </span><span class="keyword">}
<br />
<br />        </span><span class="comment">// If process is still running after timeout, kill the process and return false
<br />        </span><span class="default">PsKill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">);
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">PsExec</span><span class="keyword">(</span><span class="default">$commandJob</span><span class="keyword">) {
<br />
<br />        </span><span class="default">$command </span><span class="keyword">= </span><span class="default">$commandJob</span><span class="keyword">.</span><span class="string">' &gt; /dev/null 2&gt;&amp;1 &amp; echo $!'</span><span class="keyword">;
<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$command </span><span class="keyword">,</span><span class="default">$op</span><span class="keyword">);
<br />        </span><span class="default">$pid </span><span class="keyword">= (int)</span><span class="default">$op</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />
<br />        if(</span><span class="default">$pid</span><span class="keyword">!=</span><span class="string">""</span><span class="keyword">) return </span><span class="default">$pid</span><span class="keyword">;
<br />
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">PsExists</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">) {
<br />
<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"ps ax | grep </span><span class="default">$pid</span><span class="string"> 2&gt;&amp;1"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);
<br />
<br />        while( list(,</span><span class="default">$row</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$output</span><span class="keyword">) ) {
<br />
<br />                </span><span class="default">$row_array </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">, </span><span class="default">$row</span><span class="keyword">);
<br />                </span><span class="default">$check_pid </span><span class="keyword">= </span><span class="default">$row_array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];
<br />
<br />                if(</span><span class="default">$pid </span><span class="keyword">== </span><span class="default">$check_pid</span><span class="keyword">) {
<br />                        return </span><span class="default">true</span><span class="keyword">;
<br />                }
<br />
<br />        }
<br />
<br />        return </span><span class="default">false</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">PsKill</span><span class="keyword">(</span><span class="default">$pid</span><span class="keyword">) {
<br />        </span><span class="default">exec</span><span class="keyword">(</span><span class="string">"kill -9 </span><span class="default">$pid</span><span class="string">"</span><span class="keyword">, </span><span class="default">$output</span><span class="keyword">);
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.exec&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.exec.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
