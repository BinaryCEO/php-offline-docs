<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: pcntl_signal_dispatch - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.pcntl-signal-dispatch.php">
 <link rel="shorturl" href="https://www.php.net/pcntl-signal-dispatch">
 <link rel="alternate" href="https://www.php.net/pcntl-signal-dispatch" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.pcntl.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.pcntl-signal.php">
 <link rel="next" href="https://www.php.net/manual/en/function.pcntl-signal-get-handler.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.pcntl-signal-dispatch.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.pcntl-signal-dispatch.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.pcntl-signal-dispatch.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.pcntl-signal-dispatch.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.pcntl-signal-dispatch.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.pcntl-signal-dispatch.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.pcntl-signal-dispatch.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.pcntl-signal-dispatch.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.pcntl-signal-dispatch.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.pcntl-signal-dispatch.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.pcntl-signal-dispatch.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Calls signal handlers for pending signals" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: pcntl_signal_dispatch - Manual" />
<meta name="twitter:description" content="Calls signal handlers for pending signals" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: pcntl_signal_dispatch - Manual" />
<meta itemprop="description" content="Calls signal handlers for pending signals" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Calls signal handlers for pending signals" />

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
        <a href="function.pcntl-signal-get-handler.php">
          pcntl_signal_get_handler &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.pcntl-signal.php">
          &laquo; pcntl_signal        </a>
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
            <option value='en/function.pcntl-signal-dispatch.php' selected="selected">English</option>
            <option value='de/function.pcntl-signal-dispatch.php'>German</option>
            <option value='es/function.pcntl-signal-dispatch.php'>Spanish</option>
            <option value='fr/function.pcntl-signal-dispatch.php'>French</option>
            <option value='it/function.pcntl-signal-dispatch.php'>Italian</option>
            <option value='ja/function.pcntl-signal-dispatch.php'>Japanese</option>
            <option value='pt_BR/function.pcntl-signal-dispatch.php'>Brazilian Portuguese</option>
            <option value='ru/function.pcntl-signal-dispatch.php'>Russian</option>
            <option value='tr/function.pcntl-signal-dispatch.php'>Turkish</option>
            <option value='uk/function.pcntl-signal-dispatch.php'>Ukrainian</option>
            <option value='zh/function.pcntl-signal-dispatch.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.pcntl-signal-dispatch" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">pcntl_signal_dispatch</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal_dispatch</span> &mdash; <span class="dc-title">Calls signal handlers for pending signals</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.pcntl-signal-dispatch-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>pcntl_signal_dispatch</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>pcntl_signal_dispatch()</strong></span> function calls the signal 
   handlers installed by <span class="function"><a href="function.pcntl-signal.php" class="function">pcntl_signal()</a></span> for each pending
   signal.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-dispatch-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-dispatch-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.pcntl-signal-dispatch-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3565">
    <p><strong>Example #1 <span class="function"><strong>pcntl_signal_dispatch()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Installing signal handler...\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #0000BB">SIGHUP</span><span style="color: #007700">,  function(</span><span style="color: #0000BB">$signo</span><span style="color: #007700">) {<br />     echo </span><span style="color: #DD0000">"signal handler called\n"</span><span style="color: #007700">;<br />});<br /><br />echo </span><span style="color: #DD0000">"Generating signal SIGHUP to self...\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">posix_kill</span><span style="color: #007700">(</span><span style="color: #0000BB">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #0000BB">SIGHUP</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Dispatching...\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">pcntl_signal_dispatch</span><span style="color: #007700">();<br /><br />echo </span><span style="color: #DD0000">"Done\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Installing signal handler...
Generating signal SIGHUP to self...
Dispatching...
signal handler called
Done</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-dispatch-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.pcntl-signal.php" class="function" rel="rdfs-seeAlso">pcntl_signal()</a> - Installs a signal handler</span></li>
    <li><span class="function"><a href="function.pcntl-sigprocmask.php" class="function" rel="rdfs-seeAlso">pcntl_sigprocmask()</a> - Sets and retrieves blocked signals</span></li>
    <li><span class="function"><a href="function.pcntl-sigwaitinfo.php" class="function" rel="rdfs-seeAlso">pcntl_sigwaitinfo()</a> - Waits for signals</span></li>
    <li><span class="function"><a href="function.pcntl-sigtimedwait.php" class="function" rel="rdfs-seeAlso">pcntl_sigtimedwait()</a> - Waits for signals, with a timeout</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/pcntl/functions/pcntl-signal-dispatch.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.pcntl-signal-dispatch%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.pcntl-signal-dispatch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-signal-dispatch.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="92812">  <div class="votes">
    <div id="Vu92812">
    <a href="/manual/vote-note.php?id=92812&amp;page=function.pcntl-signal-dispatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92812">
    <a href="/manual/vote-note.php?id=92812&amp;page=function.pcntl-signal-dispatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92812" title="95% like this...">
    41
    </div>
  </div>
  <a href="#92812" class="name">
  <strong class="user"><em>webmaster at ajeux dot com</em></strong></a><a class="genanchor" href="#92812"> &para;</a><div class="date" title="2009-08-10 10:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92812">
<div class="phpcode"><code><span class="html">If you are running PHP as CLI and as a "daemon" (i.e. in a loop), this function must be called in each loop  to check if new signals are waiting dispatching.</span></code></div>
  </div>
 </div>
  <div class="note" id="114234">  <div class="votes">
    <div id="Vu114234">
    <a href="/manual/vote-note.php?id=114234&amp;page=function.pcntl-signal-dispatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114234">
    <a href="/manual/vote-note.php?id=114234&amp;page=function.pcntl-signal-dispatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114234" title="80% like this...">
    9
    </div>
  </div>
  <a href="#114234" class="name">
  <strong class="user"><em>me at subsonic dot cz</em></strong></a><a class="genanchor" href="#114234"> &para;</a><div class="date" title="2014-01-27 05:33"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114234">
<div class="phpcode"><code><span class="html">Note that calling pcntl_signal_dispatch() from within a signal handler invoked by a previous pcntl_signal_dispatch() will not trigger handlers for any new pending signals. This means that if you write a CLI daemon which forks off child processes in response to a signal, then those child processes won't be able to respond to signals. This gave me a headache for a while as pcntl_signal_dispatch() doesn't raise any errors when this occurs. One solution is to set a flag within the signal handler and react upon it (by forking off the needed child processes) elsewhere in the parent process's main loop.</span></code></div>
  </div>
 </div>
  <div class="note" id="115015">  <div class="votes">
    <div id="Vu115015">
    <a href="/manual/vote-note.php?id=115015&amp;page=function.pcntl-signal-dispatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115015">
    <a href="/manual/vote-note.php?id=115015&amp;page=function.pcntl-signal-dispatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115015" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115015" class="name">
  <strong class="user"><em>stefanis</em></strong></a><a class="genanchor" href="#115015"> &para;</a><div class="date" title="2014-05-13 12:40"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115015">
<div class="phpcode"><code><span class="html">As noted by "me at subsonic dot net" calling pcntl_signal_dispatch() from within a signal handler invoked by a previous pcntl_signal_dispatch() will not trigger handlers for any new pending signals. This seems to be true even if you pcntl_exec() a new PHP processor to execute an entirely different script.<br /><br />The solution seems to be to explicitly call pcntl_signal_dispatch()inside a ticks_handler() . And use sig_handler(int) as a push function to a queue. Immediately following the call to dispatch in the ticks_handler, pop your queue doing what you would have done in the signal_handler until the queue is empty.</span></code></div>
  </div>
 </div>
  <div class="note" id="115022">  <div class="votes">
    <div id="Vu115022">
    <a href="/manual/vote-note.php?id=115022&amp;page=function.pcntl-signal-dispatch&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115022">
    <a href="/manual/vote-note.php?id=115022&amp;page=function.pcntl-signal-dispatch&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115022" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#115022" class="name">
  <strong class="user"><em>stefanis</em></strong></a><a class="genanchor" href="#115022"> &para;</a><div class="date" title="2014-05-13 06:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115022">
<div class="phpcode"><code><span class="html">Well I misspoke before. It is not enough to process signals outside of the signal handler. They must be processed outside of the tick handler (explicit or implied). So... <br /><br />Register a tick handler that calls pcntl_signal_dispatch();<br />In the signal handler, enqueue your signal;<br />In the main loop of your script, process your signals;<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">declare(</span><span class="default">ticks</span><span class="keyword">=</span><span class="default">1</span><span class="keyword">);<br />global </span><span class="default">$sig_queue</span><span class="keyword">;<br />global </span><span class="default">$use_queue</span><span class="keyword">;<br /></span><span class="default">$sig_queue </span><span class="keyword">= array();<br /></span><span class="default">$use_queue </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;   </span><span class="comment">// set to false to do it the old way<br /><br /></span><span class="keyword">function </span><span class="default">tick_handler</span><span class="keyword">()<br />{<br />     </span><span class="default">pcntl_signal_dispatch</span><span class="keyword">();<br />}<br /><br />function </span><span class="default">sig_handler</span><span class="keyword">(</span><span class="default">$sig</span><span class="keyword">)<br />{<br />     global </span><span class="default">$sig_queue</span><span class="keyword">;<br />     global </span><span class="default">$use_queue</span><span class="keyword">;<br /><br />     if(isset(</span><span class="default">$use_queue</span><span class="keyword">) &amp;&amp; </span><span class="default">$use_queue</span><span class="keyword">)<br />     {<br />          </span><span class="default">$sig_queue</span><span class="keyword">[] = </span><span class="default">$sig</span><span class="keyword">;<br />     }<br />     else<br />     {<br />          </span><span class="default">sig_helper</span><span class="keyword">(</span><span class="default">$sig</span><span class="keyword">);<br />     }<br />}<br /><br />function </span><span class="default">sig_helper</span><span class="keyword">(</span><span class="default">$sig</span><span class="keyword">)<br />{<br />     switch(</span><span class="default">$sig</span><span class="keyword">)<br />     {<br />     case </span><span class="default">SIGHUP</span><span class="keyword">:<br />          </span><span class="default">$pid </span><span class="keyword">= </span><span class="default">pcntl_fork</span><span class="keyword">();<br />          if(</span><span class="default">$pid</span><span class="keyword">) print(</span><span class="string">"forked </span><span class="default">$pid</span><span class="string">\n"</span><span class="keyword">);<br />          break;<br /><br />     default:<br />          print(</span><span class="string">"unhandled sig: </span><span class="default">$sig</span><span class="string">\n"</span><span class="keyword">);<br />     }<br />}<br /><br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGHUP</span><span class="keyword">,   </span><span class="string">"sig_handler"</span><span class="keyword">);<br /><br />while(</span><span class="default">true</span><span class="keyword">)<br />{<br />     if(</span><span class="default">$use_queue</span><span class="keyword">) foreach(</span><span class="default">$sig_queue </span><span class="keyword">as </span><span class="default">$idx</span><span class="keyword">=&gt;</span><span class="default">$sig</span><span class="keyword">)<br />     {<br />           </span><span class="default">sig_helper</span><span class="keyword">(</span><span class="default">$sig</span><span class="keyword">);<br />           unset(</span><span class="default">$sig_queue</span><span class="keyword">[</span><span class="default">$idx</span><span class="keyword">]);<br />     }<br />     </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.pcntl-signal-dispatch&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.pcntl-signal-dispatch.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.pcntl-signal.php" title="pcntl_&#8203;signal">pcntl_&#8203;signal</a>
                        </li>
                                                <li class="current">
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
