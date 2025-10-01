<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: set_time_limit - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.set-time-limit.php">
 <link rel="shorturl" href="https://www.php.net/set-time-limit">
 <link rel="alternate" href="https://www.php.net/set-time-limit" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.info.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.set-include-path.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sys-get-temp-dir.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.set-time-limit.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.set-time-limit.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.set-time-limit.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.set-time-limit.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.set-time-limit.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.set-time-limit.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.set-time-limit.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.set-time-limit.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.set-time-limit.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.set-time-limit.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.set-time-limit.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Limits the maximum execution time" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: set_time_limit - Manual" />
<meta name="twitter:description" content="Limits the maximum execution time" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: set_time_limit - Manual" />
<meta itemprop="description" content="Limits the maximum execution time" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Limits the maximum execution time" />

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
        <a href="function.sys-get-temp-dir.php">
          sys_get_temp_dir &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.set-include-path.php">
          &laquo; set_include_path        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.php.php'>Affecting PHP's Behaviour</a></li>      <li><a href='book.info.php'>PHP Options/Info</a></li>      <li><a href='ref.info.php'>PHP Options/Info Functions</a></li>      </ul>
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
            <option value='en/function.set-time-limit.php' selected="selected">English</option>
            <option value='de/function.set-time-limit.php'>German</option>
            <option value='es/function.set-time-limit.php'>Spanish</option>
            <option value='fr/function.set-time-limit.php'>French</option>
            <option value='it/function.set-time-limit.php'>Italian</option>
            <option value='ja/function.set-time-limit.php'>Japanese</option>
            <option value='pt_BR/function.set-time-limit.php'>Brazilian Portuguese</option>
            <option value='ru/function.set-time-limit.php'>Russian</option>
            <option value='tr/function.set-time-limit.php'>Turkish</option>
            <option value='uk/function.set-time-limit.php'>Ukrainian</option>
            <option value='zh/function.set-time-limit.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.set-time-limit" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">set_time_limit</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">set_time_limit</span> &mdash; <span class="dc-title">Limits the maximum execution time</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.set-time-limit-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>set_time_limit</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$seconds</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Set the number of seconds a script is allowed to run. If this is reached,
   the script returns a fatal error. The default limit is 30 seconds or, if
   it exists, the <code class="literal">max_execution_time</code> value defined in the
   <var class="filename">php.ini</var>.
  </p>
  <p class="para">
   When called, <span class="function"><strong>set_time_limit()</strong></span> restarts the timeout
   counter from zero. In other words, if the timeout is the default 30
   seconds, and 25 seconds into script execution a call such as
   <code class="literal">set_time_limit(20)</code> is made, the script will run for a
   total of 45 seconds before timing out.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.set-time-limit-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">seconds</code></dt>
     <dd>
      <p class="para">
       The maximum execution time, in seconds. If set to zero, no time limit
       is imposed.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.set-time-limit-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.set-time-limit-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The <span class="function"><strong>set_time_limit()</strong></span> function and the configuration 
    directive <a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a>
    only affect the execution time of the script itself.  Any time spent on
    activity that happens outside the execution of the script such as system
    calls using <span class="function"><a href="function.system.php" class="function">system()</a></span>, stream operations, database
    queries, etc. is not included when determining the maximum time that the
    script has been running.
    This is not true on Windows where the measured time is real.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.set-time-limit-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="info.configuration.php#ini.max-execution-time" class="link">max_execution_time</a></li>
    <li><a href="info.configuration.php#ini.max-input-time" class="link">max_input_time</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/info/functions/set-time-limit.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.set-time-limit%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.set-time-limit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.set-time-limit.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="72167">  <div class="votes">
    <div id="Vu72167">
    <a href="/manual/vote-note.php?id=72167&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72167">
    <a href="/manual/vote-note.php?id=72167&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72167" title="52% like this...">
    33
    </div>
  </div>
  <a href="#72167" class="name">
  <strong class="user"><em>mba_aslam at yahoo dot com</em></strong></a><a class="genanchor" href="#72167"> &para;</a><div class="date" title="2007-01-05 05:50"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72167">
<div class="phpcode"><code><span class="html">while setting the set_time_limit(), the duration of sleep() will be ignored in the execution time. The following illustrates:<br /><br /><span class="default">&lt;?php<br /><br />set_time_limit</span><span class="keyword">(</span><span class="default">20</span><span class="keyword">);<br /><br />while (</span><span class="default">$i</span><span class="keyword">&lt;=</span><span class="default">10</span><span class="keyword">)<br />{<br />        echo </span><span class="string">"i=</span><span class="default">$i</span><span class="string"> "</span><span class="keyword">;<br />        </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$i</span><span class="keyword">++;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br />i=0 i=1 i=2 i=3 i=4 i=5 i=6 i=7 i=8 i=9 i=10</span></code></div>
  </div>
 </div>
  <div class="note" id="84563">  <div class="votes">
    <div id="Vu84563">
    <a href="/manual/vote-note.php?id=84563&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84563">
    <a href="/manual/vote-note.php?id=84563&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84563" title="53% like this...">
    19
    </div>
  </div>
  <a href="#84563" class="name">
  <strong class="user"><em>jonathon dot keogh at gmail dot com</em></strong></a><a class="genanchor" href="#84563"> &para;</a><div class="date" title="2008-07-18 02:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84563">
<div class="phpcode"><code><span class="html">You can do set_time_limit(0); so that the script will run forever - however this is not recommended and your web server might catch you out with an imposed HTTP timeout (usually around 5 minutes).<br /><br />You should check your web server's guides for more information about HTTP timeouts.<br /><br />Jonathon</span></code></div>
  </div>
 </div>
  <div class="note" id="115057">  <div class="votes">
    <div id="Vu115057">
    <a href="/manual/vote-note.php?id=115057&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115057">
    <a href="/manual/vote-note.php?id=115057&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115057" title="53% like this...">
    16
    </div>
  </div>
  <a href="#115057" class="name">
  <strong class="user"><em>kexianbin at diyism dot com</em></strong></a><a class="genanchor" href="#115057"> &para;</a><div class="date" title="2014-05-20 09:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115057">
<div class="phpcode"><code><span class="html">Both set_time_limit(...) and  ini_set('max_execution_time',...); won't count the time cost of sleep,file_get_contents,shell_exec,mysql_query etc, so i build this function my_background_exec(), to run static method/function in background/detached process and time is out kill it:<br /><br />my_exec.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">my_background_exec</span><span class="keyword">(</span><span class="default">$function_name</span><span class="keyword">, </span><span class="default">$params</span><span class="keyword">, </span><span class="default">$str_requires</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">=</span><span class="default">600</span><span class="keyword">)<br />         {</span><span class="default">$map</span><span class="keyword">=array(</span><span class="string">'"'</span><span class="keyword">=&gt;</span><span class="string">'\"'</span><span class="keyword">, </span><span class="string">'$'</span><span class="keyword">=&gt;</span><span class="string">'\$'</span><span class="keyword">, </span><span class="string">'`'</span><span class="keyword">=&gt;</span><span class="string">'\`'</span><span class="keyword">, </span><span class="string">'\\'</span><span class="keyword">=&gt;</span><span class="string">'\\\\'</span><span class="keyword">, </span><span class="string">'!'</span><span class="keyword">=&gt;</span><span class="string">'\!'</span><span class="keyword">);<br />          </span><span class="default">$str_requires</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$str_requires</span><span class="keyword">, </span><span class="default">$map</span><span class="keyword">);<br />          </span><span class="default">$path_run</span><span class="keyword">=</span><span class="default">dirname</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SCRIPT_FILENAME'</span><span class="keyword">]);<br />          </span><span class="default">$my_target_exec</span><span class="keyword">=</span><span class="string">"/usr/bin/php -r \"chdir('</span><span class="keyword">{</span><span class="default">$path_run</span><span class="keyword">}</span><span class="string">');</span><span class="keyword">{</span><span class="default">$str_requires</span><span class="keyword">}</span><span class="string"> \\\$params=json_decode(file_get_contents('php://stdin'),true);call_user_func_array('</span><span class="keyword">{</span><span class="default">$function_name</span><span class="keyword">}</span><span class="string">', \\\$params);\""</span><span class="keyword">;<br />          </span><span class="default">$my_target_exec</span><span class="keyword">=</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$my_target_exec</span><span class="keyword">, </span><span class="default">$map</span><span class="keyword">), </span><span class="default">$map</span><span class="keyword">);<br />          </span><span class="default">$my_background_exec</span><span class="keyword">=</span><span class="string">"(/usr/bin/php -r \"chdir('</span><span class="keyword">{</span><span class="default">$path_run</span><span class="keyword">}</span><span class="string">');</span><span class="keyword">{</span><span class="default">$str_requires</span><span class="keyword">}</span><span class="string"> my_timeout_exec(\\\"</span><span class="keyword">{</span><span class="default">$my_target_exec</span><span class="keyword">}</span><span class="string">\\\", file_get_contents('php://stdin'), </span><span class="keyword">{</span><span class="default">$timeout</span><span class="keyword">}</span><span class="string">);\" &lt;&amp;3 &amp;) 3&lt;&amp;0"</span><span class="keyword">;</span><span class="comment">//php by default use "sh", and "sh" don't support "&lt;&amp;0"<br />          </span><span class="default">my_timeout_exec</span><span class="keyword">(</span><span class="default">$my_background_exec</span><span class="keyword">, </span><span class="default">json_encode</span><span class="keyword">(</span><span class="default">$params</span><span class="keyword">), </span><span class="default">2</span><span class="keyword">);<br />         }<br /><br />function </span><span class="default">my_timeout_exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, </span><span class="default">$stdin</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$timeout</span><span class="keyword">)<br />         {</span><span class="default">$start</span><span class="keyword">=</span><span class="default">time</span><span class="keyword">();<br />          </span><span class="default">$stdout</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />          </span><span class="default">$stderr</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">;<br />          </span><span class="comment">//file_put_contents('debug.txt', time().':cmd:'.$cmd."\n", FILE_APPEND);<br />          //file_put_contents('debug.txt', time().':stdin:'.$stdin."\n", FILE_APPEND);<br /><br />          </span><span class="default">$process</span><span class="keyword">=</span><span class="default">proc_open</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">, [[</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'r'</span><span class="keyword">], [</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">], [</span><span class="string">'pipe'</span><span class="keyword">, </span><span class="string">'w'</span><span class="keyword">]], </span><span class="default">$pipes</span><span class="keyword">);<br />          if (!</span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">))<br />             {return array(</span><span class="string">'return'</span><span class="keyword">=&gt;</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'stdout'</span><span class="keyword">=&gt;</span><span class="default">$stdout</span><span class="keyword">, </span><span class="string">'stderr'</span><span class="keyword">=&gt;</span><span class="default">$stderr</span><span class="keyword">);<br />             }<br />          </span><span class="default">$status</span><span class="keyword">=</span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />          </span><span class="default">posix_setpgid</span><span class="keyword">(</span><span class="default">$status</span><span class="keyword">[</span><span class="string">'pid'</span><span class="keyword">], </span><span class="default">$status</span><span class="keyword">[</span><span class="string">'pid'</span><span class="keyword">]);    </span><span class="comment">//seperate pgid(process group id) from parent's pgid<br /><br />          </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />          </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />          </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">], </span><span class="default">0</span><span class="keyword">);<br />          </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">], </span><span class="default">$stdin</span><span class="keyword">);<br />          </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]);<br /><br />          while (</span><span class="default">1</span><span class="keyword">)<br />                {</span><span class="default">$stdout</span><span class="keyword">.=</span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                 </span><span class="default">$stderr</span><span class="keyword">.=</span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br /><br />                 if (</span><span class="default">time</span><span class="keyword">()-</span><span class="default">$start</span><span class="keyword">&gt;</span><span class="default">$timeout</span><span class="keyword">)<br />                    {</span><span class="comment">//proc_terminate($process, 9);    //only terminate subprocess, won't terminate sub-subprocess<br />                     </span><span class="default">posix_kill</span><span class="keyword">(-</span><span class="default">$status</span><span class="keyword">[</span><span class="string">'pid'</span><span class="keyword">], </span><span class="default">9</span><span class="keyword">);    </span><span class="comment">//sends SIGKILL to all processes inside group(negative means GPID, all subprocesses share the top process group, except nested my_timeout_exec)<br />                     //file_put_contents('debug.txt', time().":kill group {$status['pid']}\n", FILE_APPEND);<br />                     </span><span class="keyword">return array(</span><span class="string">'return'</span><span class="keyword">=&gt;</span><span class="string">'1'</span><span class="keyword">, </span><span class="string">'stdout'</span><span class="keyword">=&gt;</span><span class="default">$stdout</span><span class="keyword">, </span><span class="string">'stderr'</span><span class="keyword">=&gt;</span><span class="default">$stderr</span><span class="keyword">);<br />                    }<br /><br />                 </span><span class="default">$status</span><span class="keyword">=</span><span class="default">proc_get_status</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />                 </span><span class="comment">//file_put_contents('debug.txt', time().':status:'.var_export($status, true)."\n";<br />                 </span><span class="keyword">if (!</span><span class="default">$status</span><span class="keyword">[</span><span class="string">'running'</span><span class="keyword">])<br />                    {</span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">]);<br />                     </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$pipes</span><span class="keyword">[</span><span class="default">2</span><span class="keyword">]);<br />                     </span><span class="default">proc_close</span><span class="keyword">(</span><span class="default">$process</span><span class="keyword">);<br />                     return </span><span class="default">$status</span><span class="keyword">[</span><span class="string">'exitcode'</span><span class="keyword">];<br />                    }<br /><br />                 </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">100000</span><span class="keyword">); <br />                }<br />         }<br /></span><span class="default">?&gt;<br /></span><br />a_class.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />    static function </span><span class="default">jack</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">$b</span><span class="keyword">)<br />           {</span><span class="default">sleep</span><span class="keyword">(</span><span class="default">4</span><span class="keyword">);<br />            </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'debug.txt'</span><span class="keyword">, </span><span class="default">time</span><span class="keyword">().</span><span class="string">":A::jack:"</span><span class="keyword">.</span><span class="default">$a</span><span class="keyword">.</span><span class="string">' '</span><span class="keyword">.</span><span class="default">$b</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">, </span><span class="default">FILE_APPEND</span><span class="keyword">);<br />            </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">15</span><span class="keyword">);<br />           }<br />}<br /></span><span class="default">?&gt;<br /></span><br />test.php:<br /><span class="default">&lt;?php<br /></span><span class="keyword">require </span><span class="string">'my_exec.php'</span><span class="keyword">;<br /><br /></span><span class="default">my_background_exec</span><span class="keyword">(</span><span class="string">'A::jack'</span><span class="keyword">, array(</span><span class="string">'hello'</span><span class="keyword">, </span><span class="string">'jack'</span><span class="keyword">), </span><span class="string">'require "my_exec.php";require "a_class.php";'</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="85488">  <div class="votes">
    <div id="Vu85488">
    <a href="/manual/vote-note.php?id=85488&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85488">
    <a href="/manual/vote-note.php?id=85488&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85488" title="52% like this...">
    15
    </div>
  </div>
  <a href="#85488" class="name">
  <strong class="user"><em>cweiske at cweiske dot de</em></strong></a><a class="genanchor" href="#85488"> &para;</a><div class="date" title="2008-09-02 04:38"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85488">
<div class="phpcode"><code><span class="html">To get the currently used time, use getrusage()</span></code></div>
  </div>
 </div>
  <div class="note" id="53564">  <div class="votes">
    <div id="Vu53564">
    <a href="/manual/vote-note.php?id=53564&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53564">
    <a href="/manual/vote-note.php?id=53564&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53564" title="51% like this...">
    10
    </div>
  </div>
  <a href="#53564" class="name">
  <strong class="user"><em>eric pecoraro at shepard com</em></strong></a><a class="genanchor" href="#53564"> &para;</a><div class="date" title="2005-06-06 12:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53564">
<div class="phpcode"><code><span class="html">I was having trouble with script timeouts in applications where the user prompted long running background actions. I wrote this cURL/CLI background script that solved the problem when making requests from HTTP.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/* BACKGROUND CLI 1.0<br />   <br />   eric pecoraro _at_ shepard dot com - 2005-06-02<br />   Use at your own risk. No warranties expressed or implied.<br /><br />   Include this file at the top of any script to run it in the background<br />   with no time limitations ... e.g., include('background_cli.php');<br />   <br />   The script that calls this file should not return output to the browser. <br />*/<br />#  REQUIREMENTS - cURL and CLI<br />   </span><span class="keyword">if ( !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'curl_setopt'</span><span class="keyword">) OR !</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'curl_setopt'</span><span class="keyword">)  ) {<br />      echo </span><span class="string">'Requires cURL and CLI installations.' </span><span class="keyword">; exit ; <br />   }<br />   <br /></span><span class="comment">#  BUILD PATHS<br />   </span><span class="default">$script </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">,</span><span class="default">$SCRIPT_NAME</span><span class="keyword">)) ; <br />   </span><span class="default">$script_dir </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$SCRIPT_NAME</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$SCRIPT_NAME</span><span class="keyword">)-</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$script</span><span class="keyword">)) ;<br />   </span><span class="default">$scriptURL </span><span class="keyword">= </span><span class="string">'<a href="http://" rel="nofollow" target="_blank">http://</a>'</span><span class="keyword">. </span><span class="default">$HTTP_HOST </span><span class="keyword">. </span><span class="default">$script_dir </span><span class="keyword">. </span><span class="string">"</span><span class="default">$script</span><span class="string">" </span><span class="keyword">;<br />   </span><span class="default">$curlURL </span><span class="keyword">= </span><span class="string">'<a href="http://" rel="nofollow" target="_blank">http://</a>'</span><span class="keyword">. </span><span class="default">$HTTP_HOST </span><span class="keyword">. </span><span class="default">$script_dir </span><span class="keyword">. </span><span class="string">"</span><span class="default">$script</span><span class="string">?runscript=curl" </span><span class="keyword">;<br /><br /></span><span class="comment">#  Indicate that script is being called by CLI <br />   </span><span class="keyword">if ( </span><span class="default">php_sapi_name</span><span class="keyword">() == </span><span class="string">'cli' </span><span class="keyword">) {<br />      </span><span class="default">$CLI </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">;<br />   }<br /><br /></span><span class="comment">#  Action if script is being called by cURL_prompt()<br />   </span><span class="keyword">if ( </span><span class="default">$runscript </span><span class="keyword">== </span><span class="string">'curl' </span><span class="keyword">) {<br />      </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">"/usr/local/bin/php "</span><span class="keyword">.</span><span class="default">$PATH_TRANSLATED </span><span class="keyword">; </span><span class="comment">// server location of script to run<br />      </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">) ;<br />      exit;<br />   }<br /><br /></span><span class="comment">#  USER INTERFACE<br />   // User answer after submission.<br />   </span><span class="keyword">if ( </span><span class="default">$post </span><span class="keyword">) {<br />      </span><span class="default">cURL_prompt</span><span class="keyword">(</span><span class="default">$curlURL</span><span class="keyword">) ;<br />      echo </span><span class="string">'&lt;div style="margin:25px;"&gt;&lt;title&gt;Background CLI&lt;/title&gt;'</span><span class="keyword">;<br />      echo </span><span class="string">'O.K. If all goes well, &lt;b&gt;'</span><span class="keyword">.</span><span class="default">$script</span><span class="keyword">.</span><span class="string">'&lt;/b&gt; is working hard in the background with no ' </span><span class="keyword">;<br />      echo </span><span class="string">'timeout limitations. &lt;br&gt;&lt;br&gt;&lt;form action='</span><span class="keyword">.</span><span class="default">$scriptURL</span><span class="keyword">.</span><span class="string">' method=GET&gt;' </span><span class="keyword">;<br />      echo </span><span class="string">'&lt;input type=submit value=" RESET BACKGROUND CLI "&gt;&lt;/form&gt;&lt;/div&gt;' </span><span class="keyword">;<br />      exit ;<br />   }<br />   </span><span class="comment">// Start screen.<br />   </span><span class="keyword">if ( !</span><span class="default">$CLI </span><span class="keyword">AND !</span><span class="default">$runscript </span><span class="keyword">) {<br />      echo </span><span class="string">'&lt;title&gt;Background CLI&lt;/title&gt;&lt;div style="margin:25px;"&gt;' </span><span class="keyword">;<br />      echo </span><span class="string">'&lt;form action='</span><span class="keyword">.</span><span class="default">$scriptURL</span><span class="keyword">.</span><span class="string">' method=POST&gt;' </span><span class="keyword">;<br />      echo </span><span class="string">'Click to run &lt;b&gt;'</span><span class="keyword">.</span><span class="default">$script</span><span class="keyword">.</span><span class="string">'&lt;/b&gt; from the PHP CLI command line, in the background.&lt;br&gt;&lt;br&gt;' </span><span class="keyword">;<br />      echo </span><span class="string">'&lt;input type=hidden value=1 name=post&gt;' </span><span class="keyword">;<br />      echo </span><span class="string">'&lt;input type=submit value=" RUN IN BACKGROUND "&gt;&lt;/form&gt;&lt;/div&gt;' </span><span class="keyword">;<br />      exit ;<br />   }<br /><br /></span><span class="comment">#  cURL URL PROMPT FUNCTION<br />   </span><span class="keyword">function </span><span class="default">cURL_prompt</span><span class="keyword">(</span><span class="default">$url_path</span><span class="keyword">) {<br />      </span><span class="default">ob_start</span><span class="keyword">(); </span><span class="comment">// start output buffer<br />      </span><span class="default">$c</span><span class="keyword">=</span><span class="default">curl_init</span><span class="keyword">(</span><span class="default">$url_path</span><span class="keyword">);<br />      </span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">, </span><span class="default">CURLOPT_TIMEOUT</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// drop connection after 2 seconds<br />      </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br />      </span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br />      </span><span class="default">ob_end_clean</span><span class="keyword">(); </span><span class="comment">// discard output buffer<br />   </span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114082">  <div class="votes">
    <div id="Vu114082">
    <a href="/manual/vote-note.php?id=114082&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114082">
    <a href="/manual/vote-note.php?id=114082&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114082" title="51% like this...">
    3
    </div>
  </div>
  <a href="#114082" class="name">
  <strong class="user"><em>robertbrogers at gmail dot com</em></strong></a><a class="genanchor" href="#114082"> &para;</a><div class="date" title="2014-01-09 08:45"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114082">
<div class="phpcode"><code><span class="html">Documentation states:<br />When called, set_time_limit() restarts the timeout counter from zero. In other words, if the timeout is the default 30 seconds, and 25 seconds into script execution a call such as set_time_limit(20) is made, the script will run for a total of 45 seconds before timing out.<br /><br />If I have a long running script and i want a exact  time limit, I set this as near as possible to the first line.</span></code></div>
  </div>
 </div>
  <div class="note" id="33462">  <div class="votes">
    <div id="Vu33462">
    <a href="/manual/vote-note.php?id=33462&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33462">
    <a href="/manual/vote-note.php?id=33462&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33462" title="50% like this...">
    5
    </div>
  </div>
  <a href="#33462" class="name">
  <strong class="user"><em>php at mightycpa.com</em></strong></a><a class="genanchor" href="#33462"> &para;</a><div class="date" title="2003-06-26 01:30"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33462">
<div class="phpcode"><code><span class="html">You may also need to look at Apache's timeout setting (Win32 version for me), I changed max execution time value in php.ini, and still got stopped by Apache's timeout value in the httpd.conf file.</span></code></div>
  </div>
 </div>
  <div class="note" id="83617">  <div class="votes">
    <div id="Vu83617">
    <a href="/manual/vote-note.php?id=83617&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83617">
    <a href="/manual/vote-note.php?id=83617&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83617" title="50% like this...">
    4
    </div>
  </div>
  <a href="#83617" class="name">
  <strong class="user"><em>AtlantisNet</em></strong></a><a class="genanchor" href="#83617"> &para;</a><div class="date" title="2008-06-04 12:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83617">
<div class="phpcode"><code><span class="html">In IIS, there is another global timeout setting which will override any PHP settings.  You can alter this timeout by following the following instructions:<br /><br /><a href="http://www.iisadmin.co.uk/?p=7" rel="nofollow" target="_blank">http://www.iisadmin.co.uk/?p=7</a></span></code></div>
  </div>
 </div>
  <div class="note" id="59053">  <div class="votes">
    <div id="Vu59053">
    <a href="/manual/vote-note.php?id=59053&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59053">
    <a href="/manual/vote-note.php?id=59053&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59053" title="50% like this...">
    0
    </div>
  </div>
  <a href="#59053" class="name">
  <strong class="user"><em>rycardo74 at gmail dot com</em></strong></a><a class="genanchor" href="#59053"> &para;</a><div class="date" title="2005-11-24 10:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59053">
<div class="phpcode"><code><span class="html">this work to fine html streaming AND time pass limit
<br />
<br /><span class="default">&lt;?php
<br />header</span><span class="keyword">(</span><span class="string">'Content-type: text/plain'</span><span class="keyword">);
<br />echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">"H:m:s"</span><span class="keyword">), </span><span class="string">"\n"</span><span class="keyword">;
<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">30</span><span class="keyword">);
<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++)
<br />{
<br />
<br />    echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">"H:m:s"</span><span class="keyword">),</span><span class="string">"\n"</span><span class="keyword">;
<br />    for (</span><span class="default">$r </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$r </span><span class="keyword">&lt; </span><span class="default">100000</span><span class="keyword">; </span><span class="default">$r</span><span class="keyword">++){
<br />    </span><span class="default">$X</span><span class="keyword">.=  </span><span class="default">tan</span><span class="keyword">(</span><span class="default">M_LNPI</span><span class="keyword">+</span><span class="default">log</span><span class="keyword">(</span><span class="default">ceil</span><span class="keyword">(  </span><span class="default">date</span><span class="keyword">(</span><span class="string">"s"</span><span class="keyword">)*</span><span class="default">M_PI</span><span class="keyword">*</span><span class="default">M_LNPI</span><span class="keyword">+</span><span class="default">100</span><span class="keyword">)));
<br />    }
<br />    </span><span class="default">ob_flush</span><span class="keyword">();   
<br />    </span><span class="default">flush</span><span class="keyword">();
<br />
<br />}
<br />echo </span><span class="string">"work! </span><span class="default">$x</span><span class="string">"</span><span class="keyword">;
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117601">  <div class="votes">
    <div id="Vu117601">
    <a href="/manual/vote-note.php?id=117601&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117601">
    <a href="/manual/vote-note.php?id=117601&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117601" title="49% like this...">
    -1
    </div>
  </div>
  <a href="#117601" class="name">
  <strong class="user"><em>f.nakamura</em></strong></a><a class="genanchor" href="#117601"> &para;</a><div class="date" title="2015-07-06 07:54"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117601">
<div class="phpcode"><code><span class="html">set_tme_limit resets the execution time count.<br /><br />test code1:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;html&gt;&lt;body&gt;'</span><span class="keyword">;<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while(++</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100000001</span><span class="keyword">){<br />        if(</span><span class="default">$i </span><span class="keyword">% </span><span class="default">100000 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">){<br />                echo </span><span class="default">$i </span><span class="keyword">/ </span><span class="default">100000</span><span class="keyword">, </span><span class="string">"&lt;br/&gt;\n"</span><span class="keyword">;<br />        }<br />}<br />echo </span><span class="string">"done.&lt;br/&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// will not echo 'done.'.<br /></span><span class="default">?&gt;<br /></span><br />test code2:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'&lt;html&gt;&lt;body&gt;'</span><span class="keyword">;<br /></span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />while(++</span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">100000001</span><span class="keyword">){<br />        if(</span><span class="default">$i </span><span class="keyword">% </span><span class="default">100000 </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">){<br />                </span><span class="default">set_time_limit</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />                echo </span><span class="default">$i </span><span class="keyword">/ </span><span class="default">100000</span><span class="keyword">, </span><span class="string">"&lt;br/&gt;\n"</span><span class="keyword">;<br />        }<br />}<br />echo </span><span class="string">"done.&lt;br/&gt;\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// will echo 'done.'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="72305">  <div class="votes">
    <div id="Vu72305">
    <a href="/manual/vote-note.php?id=72305&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72305">
    <a href="/manual/vote-note.php?id=72305&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72305" title="49% like this...">
    -2
    </div>
  </div>
  <a href="#72305" class="name">
  <strong class="user"><em>php at stock-consulting dot com</em></strong></a><a class="genanchor" href="#72305"> &para;</a><div class="date" title="2007-01-12 05:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72305">
<div class="phpcode"><code><span class="html">To find out the currently set time limit, use
<br />
<br /><span class="default">&lt;?php
<br /> ini_get</span><span class="keyword">(</span><span class="string">'max_execution_time'</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />If set_time_limit has been previously called in the script, the result will be the value which was passed to set_time_limit (and not, as the function name "ini_get" appears to suggest, the value from the php.ini file).</span></code></div>
  </div>
 </div>
  <div class="note" id="63839">  <div class="votes">
    <div id="Vu63839">
    <a href="/manual/vote-note.php?id=63839&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63839">
    <a href="/manual/vote-note.php?id=63839&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63839" title="49% like this...">
    -2
    </div>
  </div>
  <a href="#63839" class="name">
  <strong class="user"><em>konrads dot smelkovs at gmail dot com</em></strong></a><a class="genanchor" href="#63839"> &para;</a><div class="date" title="2006-04-01 06:35"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63839">
<div class="phpcode"><code><span class="html">If you are streaming large data from database, it is counted towards the max exec time.</span></code></div>
  </div>
 </div>
  <div class="note" id="106669">  <div class="votes">
    <div id="Vu106669">
    <a href="/manual/vote-note.php?id=106669&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106669">
    <a href="/manual/vote-note.php?id=106669&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106669" title="49% like this...">
    -4
    </div>
  </div>
  <a href="#106669" class="name">
  <strong class="user"><em>ratty at brohoof dot com</em></strong></a><a class="genanchor" href="#106669"> &para;</a><div class="date" title="2011-11-25 07:39"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106669">
<div class="phpcode"><code><span class="html">One thing that I wish I had found sooner is, if you're using php-cli and really need to limit the executation time, and if you're in *nix, you can use "timeout" which is part of coreutils.<br />For example:<br /><br />timeout 5 /usr/bin/php -q /path/to/script<br /><br />and it will kill it if it takes longer than 5 seconds.<br />I had a few quick php scripts I wrote for use with cacti for example.</span></code></div>
  </div>
 </div>
  <div class="note" id="32532">  <div class="votes">
    <div id="Vu32532">
    <a href="/manual/vote-note.php?id=32532&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32532">
    <a href="/manual/vote-note.php?id=32532&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32532" title="49% like this...">
    -4
    </div>
  </div>
  <a href="#32532" class="name">
  <strong class="user"><em>rsallo at gna dot NOSPAM dot es</em></strong></a><a class="genanchor" href="#32532"> &para;</a><div class="date" title="2003-05-30 04:28"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32532">
<div class="phpcode"><code><span class="html">When you are working with IIS, PHP timeout is valid only when it's lower than script timeout defined by IIS.<br /><br />IIS 5 has a default timeout of 300 seconds. If you need a higher timeout, you also have to change IIS properties. Otherwise, your server will stop your PHP script before it reaches its own timeout.</span></code></div>
  </div>
 </div>
  <div class="note" id="125932">  <div class="votes">
    <div id="Vu125932">
    <a href="/manual/vote-note.php?id=125932&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125932">
    <a href="/manual/vote-note.php?id=125932&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125932" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#125932" class="name">
  <strong class="user"><em>Daan</em></strong></a><a class="genanchor" href="#125932"> &para;</a><div class="date" title="2021-03-15 12:00"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125932">
<div class="phpcode"><code><span class="html">If you would like to calculatue the wall time of your script (includes all external DB/HTTP calls etc.) in Unix (in Windows this is already default behavior), you could use the following function:<br /><br /><span class="default">&lt;?php<br /><br />$timeoutInSeconds </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /><br /></span><span class="comment">// This will make sure this is always called async                     <br /></span><span class="default">pcntl_async_signals</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);    <br />                                                                                                            <br /></span><span class="comment">// Second parameter is any callable (<a href="https://www.php.net/manual/en/language.types.callable.php" rel="nofollow" target="_blank">https://www.php.net/manual/en/language.types.callable.php</a>)          <br /></span><span class="default">pcntl_signal</span><span class="keyword">(</span><span class="default">SIGALRM</span><span class="keyword">, function() {<br />    exit(</span><span class="string">'Stop it!'</span><span class="keyword">);<br />});<br /></span><span class="default">pcntl_alarm</span><span class="keyword">(</span><span class="default">$timeoutInSeconds</span><span class="keyword">);                                                                                                         <br />                                                                                  <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124381">  <div class="votes">
    <div id="Vu124381">
    <a href="/manual/vote-note.php?id=124381&amp;page=function.set-time-limit&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124381">
    <a href="/manual/vote-note.php?id=124381&amp;page=function.set-time-limit&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124381" title="41% like this...">
    -4
    </div>
  </div>
  <a href="#124381" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#124381"> &para;</a><div class="date" title="2019-11-11 07:05"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124381">
<div class="phpcode"><code><span class="html">if you want to check how much time remains, this should work (at least on Windows, on non-Windows platforms, i'm not sure)<br /><br />$seconds_remaining_until_termination = ini_get('max_execution_time') === "0" ? null : ((int)ini_get('max_execution_time'))-(microtime(true)-$_SERVER['REQUEST_TIME_FLOAT']);<br /><br />gives you number of seconds until the script will be terminated due to the time limit. (tested on Windows 7 X64 SP1 with PHP 7.3.7)  - or gives you null if there is no time limit.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.set-time-limit&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.set-time-limit.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.info.php">PHP Options/Info Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.assert.php" title="assert">assert</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-get-process-title.php" title="cli_&#8203;get_&#8203;process_&#8203;title">cli_&#8203;get_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.cli-set-process-title.php" title="cli_&#8203;set_&#8203;process_&#8203;title">cli_&#8203;set_&#8203;process_&#8203;title</a>
                        </li>
                                                <li class="">
                            <a href="function.dl.php" title="dl">dl</a>
                        </li>
                                                <li class="">
                            <a href="function.extension-loaded.php" title="extension_&#8203;loaded">extension_&#8203;loaded</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-collect-cycles.php" title="gc_&#8203;collect_&#8203;cycles">gc_&#8203;collect_&#8203;cycles</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-disable.php" title="gc_&#8203;disable">gc_&#8203;disable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enable.php" title="gc_&#8203;enable">gc_&#8203;enable</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-enabled.php" title="gc_&#8203;enabled">gc_&#8203;enabled</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-mem-caches.php" title="gc_&#8203;mem_&#8203;caches">gc_&#8203;mem_&#8203;caches</a>
                        </li>
                                                <li class="">
                            <a href="function.gc-status.php" title="gc_&#8203;status">gc_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.get-cfg-var.php" title="get_&#8203;cfg_&#8203;var">get_&#8203;cfg_&#8203;var</a>
                        </li>
                                                <li class="">
                            <a href="function.get-current-user.php" title="get_&#8203;current_&#8203;user">get_&#8203;current_&#8203;user</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-constants.php" title="get_&#8203;defined_&#8203;constants">get_&#8203;defined_&#8203;constants</a>
                        </li>
                                                <li class="">
                            <a href="function.get-extension-funcs.php" title="get_&#8203;extension_&#8203;funcs">get_&#8203;extension_&#8203;funcs</a>
                        </li>
                                                <li class="">
                            <a href="function.get-include-path.php" title="get_&#8203;include_&#8203;path">get_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="">
                            <a href="function.get-included-files.php" title="get_&#8203;included_&#8203;files">get_&#8203;included_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-loaded-extensions.php" title="get_&#8203;loaded_&#8203;extensions">get_&#8203;loaded_&#8203;extensions</a>
                        </li>
                                                <li class="">
                            <a href="function.get-required-files.php" title="get_&#8203;required_&#8203;files">get_&#8203;required_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resources.php" title="get_&#8203;resources">get_&#8203;resources</a>
                        </li>
                                                <li class="">
                            <a href="function.getenv.php" title="getenv">getenv</a>
                        </li>
                                                <li class="">
                            <a href="function.getlastmod.php" title="getlastmod">getlastmod</a>
                        </li>
                                                <li class="">
                            <a href="function.getmygid.php" title="getmygid">getmygid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyinode.php" title="getmyinode">getmyinode</a>
                        </li>
                                                <li class="">
                            <a href="function.getmypid.php" title="getmypid">getmypid</a>
                        </li>
                                                <li class="">
                            <a href="function.getmyuid.php" title="getmyuid">getmyuid</a>
                        </li>
                                                <li class="">
                            <a href="function.getopt.php" title="getopt">getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.getrusage.php" title="getrusage">getrusage</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-alter.php" title="ini_&#8203;alter">ini_&#8203;alter</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get.php" title="ini_&#8203;get">ini_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-get-all.php" title="ini_&#8203;get_&#8203;all">ini_&#8203;get_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-parse-quantity.php" title="ini_&#8203;parse_&#8203;quantity">ini_&#8203;parse_&#8203;quantity</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-restore.php" title="ini_&#8203;restore">ini_&#8203;restore</a>
                        </li>
                                                <li class="">
                            <a href="function.ini-set.php" title="ini_&#8203;set">ini_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-peak-usage.php" title="memory_&#8203;get_&#8203;peak_&#8203;usage">memory_&#8203;get_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-get-usage.php" title="memory_&#8203;get_&#8203;usage">memory_&#8203;get_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.memory-reset-peak-usage.php" title="memory_&#8203;reset_&#8203;peak_&#8203;usage">memory_&#8203;reset_&#8203;peak_&#8203;usage</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-loaded-file.php" title="php_&#8203;ini_&#8203;loaded_&#8203;file">php_&#8203;ini_&#8203;loaded_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.php-ini-scanned-files.php" title="php_&#8203;ini_&#8203;scanned_&#8203;files">php_&#8203;ini_&#8203;scanned_&#8203;files</a>
                        </li>
                                                <li class="">
                            <a href="function.php-sapi-name.php" title="php_&#8203;sapi_&#8203;name">php_&#8203;sapi_&#8203;name</a>
                        </li>
                                                <li class="">
                            <a href="function.php-uname.php" title="php_&#8203;uname">php_&#8203;uname</a>
                        </li>
                                                <li class="">
                            <a href="function.phpcredits.php" title="phpcredits">phpcredits</a>
                        </li>
                                                <li class="">
                            <a href="function.phpinfo.php" title="phpinfo">phpinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.phpversion.php" title="phpversion">phpversion</a>
                        </li>
                                                <li class="">
                            <a href="function.putenv.php" title="putenv">putenv</a>
                        </li>
                                                <li class="">
                            <a href="function.set-include-path.php" title="set_&#8203;include_&#8203;path">set_&#8203;include_&#8203;path</a>
                        </li>
                                                <li class="current">
                            <a href="function.set-time-limit.php" title="set_&#8203;time_&#8203;limit">set_&#8203;time_&#8203;limit</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-get-temp-dir.php" title="sys_&#8203;get_&#8203;temp_&#8203;dir">sys_&#8203;get_&#8203;temp_&#8203;dir</a>
                        </li>
                                                <li class="">
                            <a href="function.version-compare.php" title="version_&#8203;compare">version_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-thread-id.php" title="zend_&#8203;thread_&#8203;id">zend_&#8203;thread_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.zend-version.php" title="zend_&#8203;version">zend_&#8203;version</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.assert-options.php" title="assert_&#8203;options">assert_&#8203;options</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-gpc.php" title="get_&#8203;magic_&#8203;quotes_&#8203;gpc">get_&#8203;magic_&#8203;quotes_&#8203;gpc</a>
                    </li>
                                    <li class="">
                        <a href="function.get-magic-quotes-runtime.php" title="get_&#8203;magic_&#8203;quotes_&#8203;runtime">get_&#8203;magic_&#8203;quotes_&#8203;runtime</a>
                    </li>
                                    <li class="">
                        <a href="function.restore-include-path.php" title="restore_&#8203;include_&#8203;path">restore_&#8203;include_&#8203;path</a>
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
