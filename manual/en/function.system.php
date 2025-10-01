<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: system - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.system.php">
 <link rel="shorturl" href="https://www.php.net/system">
 <link rel="alternate" href="https://www.php.net/system" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.exec.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.shell-exec.php">
 <link rel="next" href="https://www.php.net/manual/en/book.parallel.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.system.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.system.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.system.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.system.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.system.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.system.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.system.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.system.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.system.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.system.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.system.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Execute an external program and display the output" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: system - Manual" />
<meta name="twitter:description" content="Execute an external program and display the output" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: system - Manual" />
<meta itemprop="description" content="Execute an external program and display the output" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Execute an external program and display the output" />

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
        <a href="book.parallel.php">
          parallel &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.shell-exec.php">
          &laquo; shell_exec        </a>
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
            <option value='en/function.system.php' selected="selected">English</option>
            <option value='de/function.system.php'>German</option>
            <option value='es/function.system.php'>Spanish</option>
            <option value='fr/function.system.php'>French</option>
            <option value='it/function.system.php'>Italian</option>
            <option value='ja/function.system.php'>Japanese</option>
            <option value='pt_BR/function.system.php'>Brazilian Portuguese</option>
            <option value='ru/function.system.php'>Russian</option>
            <option value='tr/function.system.php'>Turkish</option>
            <option value='uk/function.system.php'>Ukrainian</option>
            <option value='zh/function.system.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.system" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">system</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">system</span> &mdash; <span class="dc-title">Execute an external program and display the output</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.system-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>system</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$command</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter reference">&$result_code</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>system()</strong></span> is just like the C version of the
   function in that it executes the given
   <code class="parameter">command</code> and outputs the result.
  </p>
  <p class="para">
   The <span class="function"><strong>system()</strong></span> call also tries to automatically
   flush the web server&#039;s output buffer after each line of output if
   PHP is running as a server module.
  </p>
  <p class="para">
   If you need to execute a command and have all the data from the
   command passed directly back without any interference, use the
   <span class="function"><a href="function.passthru.php" class="function">passthru()</a></span> function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.system-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">command</code></dt>
     <dd>
      <p class="para">
       The command that will be executed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">result_code</code></dt>
     <dd>
      <p class="para">
       If the <code class="parameter">result_code</code> argument is present, then the
       return status of the executed command will be written to this
       variable.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.system-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the last line of the command output on success, and <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
   on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.system-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3607">
    <p><strong>Example #1 <span class="function"><strong>system()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'&lt;pre&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Outputs all the result of shellcommand "ls", and returns<br />// the last output line into $last_line. Stores the return value<br />// of the shell command in $retval.<br /></span><span style="color: #0000BB">$last_line </span><span style="color: #007700">= </span><span style="color: #0000BB">system</span><span style="color: #007700">(</span><span style="color: #DD0000">'ls'</span><span style="color: #007700">, </span><span style="color: #0000BB">$retval</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Printing additional info<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'<br />&lt;/pre&gt;<br />&lt;hr /&gt;Last line of the output: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$last_line </span><span style="color: #007700">. </span><span style="color: #DD0000">'<br />&lt;hr /&gt;Return value: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$retval</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.system-notes">
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
 </div>


 <div class="refsect1 seealso" id="refsect1-function.system-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.exec.php" class="function" rel="rdfs-seeAlso">exec()</a> - Execute an external program</span></li>
    <li><span class="function"><a href="function.passthru.php" class="function" rel="rdfs-seeAlso">passthru()</a> - Execute an external program and display raw output</span></li>
    <li><span class="function"><a href="function.popen.php" class="function" rel="rdfs-seeAlso">popen()</a> - Opens process file pointer</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/exec/functions/system.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.system%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.system&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.system.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">18 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="108713">  <div class="votes">
    <div id="Vu108713">
    <a href="/manual/vote-note.php?id=108713&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108713">
    <a href="/manual/vote-note.php?id=108713&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108713" title="60% like this...">
    62
    </div>
  </div>
  <a href="#108713" class="name">
  <strong class="user"><em>no at mail dot com</em></strong></a><a class="genanchor" href="#108713"> &para;</a><div class="date" title="2012-05-19 10:06"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108713">
<div class="phpcode"><code><span class="html">This is for WINDOWS users. I am running apache and I have been trying for hours now to capture the output of a command. <br /><br />I'd tried everything that is written here and then continued searching online with no luck at all. The output of the command was never captured. All I got was an empty array.<br /><br />Finally, I found a comment in a blog by a certain amazing guy that solved my problems. <br /><br />Adding the string ' 2&gt;&amp;1' to the command name finally returned the output!! This works in exec() as well as system() in PHP since it uses stream redirection to redirect the output to the correct place!<br /><br />system("yourCommandName 2&gt;&amp;1",$output) ;</span></code></div>
  </div>
 </div>
  <div class="note" id="66795">  <div class="votes">
    <div id="Vu66795">
    <a href="/manual/vote-note.php?id=66795&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66795">
    <a href="/manual/vote-note.php?id=66795&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66795" title="64% like this...">
    14
    </div>
  </div>
  <a href="#66795" class="name">
  <strong class="user"><em>dan at thecsl dot org</em></strong></a><a class="genanchor" href="#66795"> &para;</a><div class="date" title="2006-05-29 08:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66795">
<div class="phpcode"><code><span class="html">You probably want to check your system calls for errors. The convention is to return 0  for "no error" which is the same as FALSE which can be confusing. You need to do something like:<br /><br /><span class="default">&lt;?php<br />  $cmd </span><span class="keyword">= </span><span class="string">"/usr/bin/pngtopnm </span><span class="default">$png_file</span><span class="string"> &gt; </span><span class="default">$pnm_file</span><span class="string">"</span><span class="keyword">;<br />  </span><span class="default">system</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">,</span><span class="default">$return_value</span><span class="keyword">);<br />  (</span><span class="default">$return_value </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) or die(</span><span class="string">"returned an error: </span><span class="default">$cmd</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76561">  <div class="votes">
    <div id="Vu76561">
    <a href="/manual/vote-note.php?id=76561&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76561">
    <a href="/manual/vote-note.php?id=76561&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76561" title="58% like this...">
    6
    </div>
  </div>
  <a href="#76561" class="name">
  <strong class="user"><em>timgolding_10 at hotmail dot com</em></strong></a><a class="genanchor" href="#76561"> &para;</a><div class="date" title="2007-07-20 07:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76561">
<div class="phpcode"><code><span class="html">An example of using the system to call the file command on a linux server. This script detects whether a user posted file is a jpeg, gif or png<br /><br /><span class="default">&lt;?PHP<br /><br />$accepted_types</span><span class="keyword">=array(</span><span class="string">"JPEG" </span><span class="keyword">, </span><span class="string">"GIF"</span><span class="keyword">, </span><span class="string">"PNG"</span><span class="keyword">); <br /><br />    </span><span class="comment">// The temporary filename of the file in which the uploaded file was stored on the server. <br /></span><span class="keyword">if(!empty(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"uploadedfile"</span><span class="keyword">]))<br />  {<br />    </span><span class="default">$uploaddir </span><span class="keyword">= </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'DOCUMENT_ROOT'</span><span class="keyword">].</span><span class="string">"/images/"</span><span class="keyword">;<br />    </span><span class="default">$uploaddir</span><span class="keyword">.=</span><span class="default">basename</span><span class="keyword">( </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'uploadedfile'</span><span class="keyword">][</span><span class="string">'name'</span><span class="keyword">]);<br />   <br /> </span><span class="comment">//verfiy file using linux FILE command <br /> </span><span class="default">$last_line </span><span class="keyword">= </span><span class="default">system</span><span class="keyword">(</span><span class="string">'file '</span><span class="keyword">.</span><span class="default">escapeshellarg</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'uploadedfile'</span><span class="keyword">][</span><span class="string">'tmp_name'</span><span class="keyword">]), </span><span class="default">$retval</span><span class="keyword">);<br /><br /> </span><span class="comment">//get the file extension returned through magic database<br /> </span><span class="default">$splitvals</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">' image data' </span><span class="keyword">,  </span><span class="default">$last_line</span><span class="keyword">);<br /> </span><span class="default">$vals</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">':'</span><span class="keyword">, </span><span class="default">$splitvals</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /> </span><span class="default">$vals</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">, </span><span class="default">$vals</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]); <br /><br /> if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$vals</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">$accepted_types</span><span class="keyword">))<br /> {<br />    echo </span><span class="default">$vals</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">].</span><span class="string">' was accepted &lt;br /&gt;'</span><span class="keyword">;<br />        if(!</span><span class="default">file_exists</span><span class="keyword">(</span><span class="default">$uploaddir</span><span class="keyword">)){<br />            </span><span class="comment">//Copy the file to some permanent location<br />            </span><span class="keyword">if(</span><span class="default">move_uploaded_file</span><span class="keyword">(</span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">"uploadedfile"</span><span class="keyword">][</span><span class="string">"tmp_name"</span><span class="keyword">], </span><span class="default">$uploaddir</span><span class="keyword">))<br />             {<br />              echo </span><span class="default">$uploaddir</span><span class="keyword">.</span><span class="string">" was uploaded! &lt;br /&gt;"</span><span class="keyword">;<br />             }<br />            else<br />             {<br />              echo </span><span class="string">"There was a problem when uploding the new file, please contact admin about this."</span><span class="keyword">;<br />             }<br />        }<br />        else echo </span><span class="string">'This file already exists in DB please rename file before uploading'</span><span class="keyword">;<br />}<br />}else echo </span><span class="default">$_FILES</span><span class="keyword">[</span><span class="string">'uploadedfile'</span><span class="keyword">][</span><span class="string">'error'</span><span class="keyword">].</span><span class="string">'&lt;br /&gt;'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40454">  <div class="votes">
    <div id="Vu40454">
    <a href="/manual/vote-note.php?id=40454&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40454">
    <a href="/manual/vote-note.php?id=40454&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40454" title="57% like this...">
    7
    </div>
  </div>
  <a href="#40454" class="name">
  <strong class="user"><em>mortoray at ecircle-ag dot com</em></strong></a><a class="genanchor" href="#40454"> &para;</a><div class="date" title="2004-03-04 03:55"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40454">
<div class="phpcode"><code><span class="html">Do not use "system" if you use the "php.ini" option:<br />    zlib.output_compression = On<br /><br />Doing so will result in the browser receiving garbage (I'm guessing the headers/buffers get confused).<br /><br />Use passthru in this case, it appears to work as intended.</span></code></div>
  </div>
 </div>
  <div class="note" id="973">  <div class="votes">
    <div id="Vu973">
    <a href="/manual/vote-note.php?id=973&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd973">
    <a href="/manual/vote-note.php?id=973&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V973" title="57% like this...">
    4
    </div>
  </div>
  <a href="#973" class="name">
  <strong class="user"><em>ccurtis at aet-usa dot com</em></strong></a><a class="genanchor" href="#973"> &para;</a><div class="date" title="1999-06-14 11:07"><strong>26 years ago</strong></div>
  <div class="text" id="Hcom973">
<div class="phpcode"><code><span class="html">If no headers have been printed, calling the system() function will flush the headers to the client and insert a newline; no further headers or cookies will be transferred to the browser.  In version 3.0.7, you will not be warned that the Header() function failed, but will be warned if trying to set a cookie.  If you want to continue to send headers after the function call, use exec() instead.</span></code></div>
  </div>
 </div>
  <div class="note" id="6978">  <div class="votes">
    <div id="Vu6978">
    <a href="/manual/vote-note.php?id=6978&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd6978">
    <a href="/manual/vote-note.php?id=6978&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V6978" title="57% like this...">
    4
    </div>
  </div>
  <a href="#6978" class="name">
  <strong class="user"><em>nospam at php dot net</em></strong></a><a class="genanchor" href="#6978"> &para;</a><div class="date" title="2000-07-24 05:57"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom6978">
<div class="phpcode"><code><span class="html">If you are trying to parse a CGI script to your webserver which needs arguments, take a look to the virtual() function .. it took me long before i found out it existed...
<br />It's used like this:
<br /><span class="default">&lt;?php
<br />virtual</span><span class="keyword">(</span><span class="string">"/cgi-bin/lastuser.cgi?argument"</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>And that works excellent now for me</span></code></div>
  </div>
 </div>
  <div class="note" id="55627">  <div class="votes">
    <div id="Vu55627">
    <a href="/manual/vote-note.php?id=55627&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55627">
    <a href="/manual/vote-note.php?id=55627&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55627" title="55% like this...">
    3
    </div>
  </div>
  <a href="#55627" class="name">
  <strong class="user"><em>vdweij at hotmail dot com</em></strong></a><a class="genanchor" href="#55627"> &para;</a><div class="date" title="2005-08-09 02:41"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55627">
<div class="phpcode"><code><span class="html">It is possible to only capture the error stream (STERR). Here it goes...<br /><br />(some_command par1 par2 &gt; /dev/null) 3&gt;&amp;1 1&gt;&amp;2 2&gt;&amp;3<br /><br />-First STDOUT is redirected to /dev/null.<br />-By using parenthesis it is possible to gain control over STERR and STOUT again.<br />-Then switch STERR with STOUT. <br /><br />The switch is using the standard variable switch method -- 3 variables (buckets) are required to swap 2 variables with each other. (you have 2 variables and you need to switch the contents - you must bring in a 3rd temporary variable to hold the contents of one value so you can properly swap them).<br /><br />This link gave me this information:<br /><a href="http://www.cpqlinux.com/redirect.html" rel="nofollow" target="_blank">http://www.cpqlinux.com/redirect.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="35842">  <div class="votes">
    <div id="Vu35842">
    <a href="/manual/vote-note.php?id=35842&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35842">
    <a href="/manual/vote-note.php?id=35842&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35842" title="53% like this...">
    3
    </div>
  </div>
  <a href="#35842" class="name">
  <strong class="user"><em>morris_hirsch at hotmail dot com</em></strong></a><a class="genanchor" href="#35842"> &para;</a><div class="date" title="2003-09-16 02:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35842">
<div class="phpcode"><code><span class="html">another reason to use shell_exec instead of system is when the result is multiple lines such as grep or ls <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// this correctly sets answer string to all lines found<br />//$answer = shell_exec ("grep 'set of color names' *.php ");<br />//echo "answer = $answer";<br /><br />// this passes all lines to output (they  show on page)<br />// and sets answer string to the final line<br /> </span><span class="default">$sys </span><span class="keyword">= </span><span class="default">system </span><span class="keyword">(</span><span class="string">"grep 'set of color names' *.php "</span><span class="keyword">);<br /> echo </span><span class="string">"sys =((</span><span class="default">$sys</span><span class="string">))"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />here is view/source resulting from system call<br /><br />setprefs.php:// The standard set of color names is:<br />setprefs.php:// Most browsers accept a wider set of color names<br />silly.php:  //$answer = shell_exec ("grep 'set of color names' *.php ");<br />silly.php: $sys = system ("grep 'set of color names' *.php ");<br />sys =((silly.php: $sys = system ("grep 'set of color names' *.php ");))<br /><br />and here is view source from using shell_exec instead<br /><br />answer = setprefs.php:// The standard set of color names is:<br />setprefs.php:// Most browsers accept a wider set of color names<br />silly.php:  $answer = shell_exec ("grep 'set of color names' *.php ");<br />silly.php:// $sys = system ("grep 'set of color names' *.php ");</span></code></div>
  </div>
 </div>
  <div class="note" id="123769">  <div class="votes">
    <div id="Vu123769">
    <a href="/manual/vote-note.php?id=123769&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123769">
    <a href="/manual/vote-note.php?id=123769&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123769" title="52% like this...">
    1
    </div>
  </div>
  <a href="#123769" class="name">
  <strong class="user"><em>Anonoymous</em></strong></a><a class="genanchor" href="#123769"> &para;</a><div class="date" title="2019-04-11 11:06"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123769">
<div class="phpcode"><code><span class="html">Windows commands requiring a GUI.<br /><br />Alot of the info on this topic is from the 2010-2012 time frame and referring to XP, and basically don't work.  I am using apache/php/mysql in windows 7.<br /><br />When requiring a system command in windows with a GUI - such as a labview executable, notepad, etc..., others have mentioned the psexec command from sysinternals, since cmd /c wont work, but the specific use was not real clearly defined.  Here is what worked for me on windows 7:  <br /><br />system('C:/nttools/2019/psexec \\\\10.100.100.101 -i  -u administrator -p password -accepteula -nobanner C:\\htdocs\\test\\test.bat');<br /><br />The path to the psexec executable is with forward slashes, the remote PC network location (which was actually the local PC, not remote) was \\ip_address with an extra backslash for each backslash so that required the 4 \'s.<br /><br />The path for the command to be executed by psexec required backslashes, which also requires double backslashes.<br /><br />The -i option is for an interactive program, and is required for it to properly run, otherwise it show up in the taskmanager but not be visable or execute properly if given command line arguments.<br /><br />The -accepteula -nobanner is to suppress the sysinternals message box about their license.<br /><br />My command to execute is really long with multiple command line inputs with many surrounded in double quotes, so I thought it would be easiest to put that in a batch file and just call the bat file.  Works great, remote users loading the webpage causes the executable to pop up on the web server, do its analysis and disappear.  Labview can read native excel files with active-x functions and write to a mysql data base to store results etc, so thats a pretty powerful combination of functions.</span></code></div>
  </div>
 </div>
  <div class="note" id="35297">  <div class="votes">
    <div id="Vu35297">
    <a href="/manual/vote-note.php?id=35297&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35297">
    <a href="/manual/vote-note.php?id=35297&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35297" title="53% like this...">
    2
    </div>
  </div>
  <a href="#35297" class="name">
  <strong class="user"><em>Jim Belton</em></strong></a><a class="genanchor" href="#35297"> &para;</a><div class="date" title="2003-08-26 01:58"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35297">
<div class="phpcode"><code><span class="html">To run a full screen program from a PHP CLI script, redirect input from and output to /dev/tty.  For example:<br /><br />system("timeconfig &gt; /dev/tty &lt; /dev/tty");<br /><br />System will wait for the program to finish before continuing.</span></code></div>
  </div>
 </div>
  <div class="note" id="30193">  <div class="votes">
    <div id="Vu30193">
    <a href="/manual/vote-note.php?id=30193&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30193">
    <a href="/manual/vote-note.php?id=30193&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30193" title="51% like this...">
    1
    </div>
  </div>
  <a href="#30193" class="name">
  <strong class="user"><em>d dot kraft at szo dot de</em></strong></a><a class="genanchor" href="#30193"> &para;</a><div class="date" title="2003-03-10 02:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30193">
<div class="phpcode"><code><span class="html">For PHP running inside a Webserver:<br /><br />When calling a process via<br />system("your_process &amp;");<br />to make it running in background, note that this process is killed when the webserver is restarted.</span></code></div>
  </div>
 </div>
  <div class="note" id="90664">  <div class="votes">
    <div id="Vu90664">
    <a href="/manual/vote-note.php?id=90664&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90664">
    <a href="/manual/vote-note.php?id=90664&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90664" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90664" class="name">
  <strong class="user"><em>grytolle at gmail dot com</em></strong></a><a class="genanchor" href="#90664"> &para;</a><div class="date" title="2009-05-03 10:12"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90664">
<div class="phpcode"><code><span class="html">This is a work-around that makes the program run in it's own directory instead of the script's.
<br />
<br />example usage:
<br /><span class="default">&lt;?php runAsynchronously</span><span class="keyword">(</span><span class="string">"c:\games\jazz2\jazz2.exe"</span><span class="keyword">,</span><span class="string">"-connect 1.2.3.4"</span><span class="keyword">); </span><span class="default">?&gt;
<br /></span>
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">runAsynchronously</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">,</span><span class="default">$arguments</span><span class="keyword">) {
<br />    </span><span class="default">$WshShell </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"WScript.Shell"</span><span class="keyword">);
<br />    </span><span class="default">$oShellLink </span><span class="keyword">= </span><span class="default">$WshShell</span><span class="keyword">-&gt;</span><span class="default">CreateShortcut</span><span class="keyword">(</span><span class="string">"temp.lnk"</span><span class="keyword">);
<br />    </span><span class="default">$oShellLink</span><span class="keyword">-&gt;</span><span class="default">TargetPath </span><span class="keyword">= </span><span class="default">$path</span><span class="keyword">;
<br />    </span><span class="default">$oShellLink</span><span class="keyword">-&gt;</span><span class="default">Arguments </span><span class="keyword">= </span><span class="default">$arguments</span><span class="keyword">;
<br />    </span><span class="default">$oShellLink</span><span class="keyword">-&gt;</span><span class="default">WorkingDirectory </span><span class="keyword">= </span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$path</span><span class="keyword">);
<br />    </span><span class="default">$oShellLink</span><span class="keyword">-&gt;</span><span class="default">WindowStyle </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$oShellLink</span><span class="keyword">-&gt;</span><span class="default">Save</span><span class="keyword">();
<br />    </span><span class="default">$oExec </span><span class="keyword">= </span><span class="default">$WshShell</span><span class="keyword">-&gt;</span><span class="default">Run</span><span class="keyword">(</span><span class="string">"temp.lnk"</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />    unset(</span><span class="default">$WshShell</span><span class="keyword">,</span><span class="default">$oShellLink</span><span class="keyword">,</span><span class="default">$oExec</span><span class="keyword">);
<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="string">"temp.lnk"</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="83572">  <div class="votes">
    <div id="Vu83572">
    <a href="/manual/vote-note.php?id=83572&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83572">
    <a href="/manual/vote-note.php?id=83572&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83572" title="50% like this...">
    0
    </div>
  </div>
  <a href="#83572" class="name">
  <strong class="user"><em>Daniel Morris (danielxmorris.com)</em></strong></a><a class="genanchor" href="#83572"> &para;</a><div class="date" title="2008-06-02 06:34"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83572">
<div class="phpcode"><code><span class="html">How to produce a system beep with PHP.<br /><br /><span class="default">&lt;?php<br />        </span><span class="keyword">function </span><span class="default">beep </span><span class="keyword">(</span><span class="default">$int_beeps </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {<br />            for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$int_beeps</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++): </span><span class="default">$string_beeps </span><span class="keyword">.= </span><span class="string">"\x07"</span><span class="keyword">; endfor;<br />            isset (</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_PROTOCOL'</span><span class="keyword">]) ? </span><span class="default">false </span><span class="keyword">: print </span><span class="default">$string_beeps</span><span class="keyword">; <br />        }<br /><br /></span><span class="default">?&gt;<br /></span><br />This will not do anything when running through a browser, if running through a shell it will produce an audible beep $int_beeps times.  This should work on Windows, Unix, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="82411">  <div class="votes">
    <div id="Vu82411">
    <a href="/manual/vote-note.php?id=82411&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82411">
    <a href="/manual/vote-note.php?id=82411&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82411" title="50% like this...">
    0
    </div>
  </div>
  <a href="#82411" class="name">
  <strong class="user"><em>vlad dot sharanhovich at gmail dot com</em></strong></a><a class="genanchor" href="#82411"> &para;</a><div class="date" title="2008-04-09 12:33"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82411">
<div class="phpcode"><code><span class="html">The double quote problem on Windows platform discussed earlier here in comments still present in PHP 5.2.5. You can't execute system($command) if $command contains more than 2 " chars. system('"echo" A'); works, while system('"echo" "A"'); does not. Search comment, that was a solution posted to overhaul this issue via temporary .bat file.</span></code></div>
  </div>
 </div>
  <div class="note" id="94929">  <div class="votes">
    <div id="Vu94929">
    <a href="/manual/vote-note.php?id=94929&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94929">
    <a href="/manual/vote-note.php?id=94929&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94929" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#94929" class="name">
  <strong class="user"><em>kexianin at diyism dot com</em></strong></a><a class="genanchor" href="#94929"> &para;</a><div class="date" title="2009-12-02 11:41"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94929">
<div class="phpcode"><code><span class="html">If you can't see any output or error from system(), shell_exec() etc, you could try this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">my_exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$input</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">)
<br />         {</span><span class="default">$proc</span><span class="keyword">=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, array(</span><span class="default">0</span><span class="keyword">=&gt;array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">), </span><span class="default">1</span><span class="keyword">=&gt;array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">=&gt;array(</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">)), </span><span class="default">$pipes</span><span class="keyword">);
<br />          </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$input</span><span class="keyword">);</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);
<br />          </span><span class="default">$stdout</span><span class="keyword">=</span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);
<br />          </span><span class="default">$stderr</span><span class="keyword">=</span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);
<br />          </span><span class="default">$rtn</span><span class="keyword">=</span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$proc</span><span class="keyword">);
<br />          return array(</span><span class="string">'stdout'</span><span class="keyword">=&gt;</span><span class="default">$stdout</span><span class="keyword">,
<br />                       </span><span class="string">'stderr'</span><span class="keyword">=&gt;</span><span class="default">$stderr</span><span class="keyword">,
<br />                       </span><span class="string">'return'</span><span class="keyword">=&gt;</span><span class="default">$rtn
<br />                      </span><span class="keyword">);
<br />         }
<br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">my_exec</span><span class="keyword">(</span><span class="string">'echo -e $(&lt;/dev/stdin) | wc -l'</span><span class="keyword">, </span><span class="string">'h\\nel\\nlo'</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />For example, "echo shell_exec('ls');" will get nothing output,
<br />"my_exec('ls');" will get "sh: ls: command not found",
<br />"my_exec('/bin/ls');" will maybe get "sh: /bin/ls: Permission denied",
<br />and the permission may be caused by selinux.</span></code></div>
  </div>
 </div>
  <div class="note" id="42567">  <div class="votes">
    <div id="Vu42567">
    <a href="/manual/vote-note.php?id=42567&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42567">
    <a href="/manual/vote-note.php?id=42567&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42567" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#42567" class="name">
  <strong class="user"><em>eric_REMOVE at movementmovement_REMOVE dot com</em></strong></a><a class="genanchor" href="#42567"> &para;</a><div class="date" title="2004-05-21 12:56"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42567">
<div class="phpcode"><code><span class="html">It's important to note that if you are running a series of system() commands in a loop, you need to include the second argument in order for them to run synchonously.<br /><br />ie)<br /><br />// this will execute process.php asynchronously; not waiting for completion before executing the next one.<br />$array = array('apple', 'banana', 'pear');<br />foreach($array as $i)<br />{<br />system("php process.php \"fruit=$i\"");<br />}<br /><br />// this will execute process.php 3 times, waiting for the prior command to complete before starting a new one<br />$array = array('apple', 'banana', 'pear');<br />foreach($array as $i)<br />{<br />system("php process.php \"fruit=$i\"", $status);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="35649">  <div class="votes">
    <div id="Vu35649">
    <a href="/manual/vote-note.php?id=35649&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35649">
    <a href="/manual/vote-note.php?id=35649&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35649" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#35649" class="name">
  <strong class="user"><em>lc at _REMOVE__THIS_lc dot yi dot org</em></strong></a><a class="genanchor" href="#35649"> &para;</a><div class="date" title="2003-09-09 05:24"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35649">
<div class="phpcode"><code><span class="html">Re: cpmorris at hotmail dot com and WINNT.<br /><br />I just spent some time learning to use the php system function.  I managed to get long file names to work for me.  It seems you need to take the same approach that batch files, WSH, and most other programming languages do under WinNT/2K/XP.  Putting double quotes around the Path+Filename seems to work.  So, something like this should have worked for you:<br /><br />"c:\program files\apache group\apache2\bin\htpasswd"<br /><br />Note that if you have parameters, they go OUTSIDE of the last quote.  Oh, and don't forget to escape the slashes and quotes!  <br /><br />I don't know what htpasswd's params are, but let us pretend:<br /><br />$cmd="\"c:\\program files\\apache group\\apache2\\bin\\htpasswd\" username password";<br />$str=system($cmd);<br /><br />Hope this helps someone!<br /><br />Leonard<br />http:\\www.lc.yi.org</span></code></div>
  </div>
 </div>
  <div class="note" id="30053">  <div class="votes">
    <div id="Vu30053">
    <a href="/manual/vote-note.php?id=30053&amp;page=function.system&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30053">
    <a href="/manual/vote-note.php?id=30053&amp;page=function.system&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30053" title="43% like this...">
    -4
    </div>
  </div>
  <a href="#30053" class="name">
  <strong class="user"><em>cnoelker at softpearls dot de</em></strong></a><a class="genanchor" href="#30053"> &para;</a><div class="date" title="2003-03-05 06:13"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30053">
<div class="phpcode"><code><span class="html">Hi,<br />some tips for using a system()-call for batch files on a windows computer:<br />* Write the path to the executable with double back-slashes, like so:<br />   C:\\path\\to\\prog.exe<br />* If you are refering to other pathes, e.g. as a parameter, one back-slash works fine.<br />* Do not use SET for declaring parameters - this does not work! Example:<br />   SET PATH="C:\path\to\lib"<br />   echo path is %PATH%<br />This works fine when started from the comand line, but when called from PHP, the variable is just empty.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.system&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.system.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.proc-open.php" title="proc_&#8203;open">proc_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.proc-terminate.php" title="proc_&#8203;terminate">proc_&#8203;terminate</a>
                        </li>
                                                <li class="">
                            <a href="function.shell-exec.php" title="shell_&#8203;exec">shell_&#8203;exec</a>
                        </li>
                                                <li class="current">
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
