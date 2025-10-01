<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: posix_times - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.posix-times.php">
 <link rel="shorturl" href="https://www.php.net/posix-times">
 <link rel="alternate" href="https://www.php.net/posix-times" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.posix.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.posix-sysconf.php">
 <link rel="next" href="https://www.php.net/manual/en/function.posix-ttyname.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.posix-times.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.posix-times.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.posix-times.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.posix-times.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.posix-times.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.posix-times.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.posix-times.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.posix-times.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.posix-times.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.posix-times.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.posix-times.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get process times" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: posix_times - Manual" />
<meta name="twitter:description" content="Get process times" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: posix_times - Manual" />
<meta itemprop="description" content="Get process times" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get process times" />

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
        <a href="function.posix-ttyname.php">
          posix_ttyname &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.posix-sysconf.php">
          &laquo; posix_sysconf        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.fileprocess.process.php'>Process Control Extensions</a></li>      <li><a href='book.posix.php'>POSIX</a></li>      <li><a href='ref.posix.php'>POSIX Functions</a></li>      </ul>
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
            <option value='en/function.posix-times.php' selected="selected">English</option>
            <option value='de/function.posix-times.php'>German</option>
            <option value='es/function.posix-times.php'>Spanish</option>
            <option value='fr/function.posix-times.php'>French</option>
            <option value='it/function.posix-times.php'>Italian</option>
            <option value='ja/function.posix-times.php'>Japanese</option>
            <option value='pt_BR/function.posix-times.php'>Brazilian Portuguese</option>
            <option value='ru/function.posix-times.php'>Russian</option>
            <option value='tr/function.posix-times.php'>Turkish</option>
            <option value='uk/function.posix-times.php'>Ukrainian</option>
            <option value='zh/function.posix-times.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.posix-times" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">posix_times</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_times</span> &mdash; <span class="dc-title">Get process times</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.posix-times-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>posix_times</strong></span>(): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gets information about the current CPU usage.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.posix-times-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.posix-times-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a hash of strings with information about the current
   process CPU usage. The indices of the hash are:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      ticks - the number of clock ticks that have elapsed since
      reboot.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      utime - user time used by the current process.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      stime - system time used by the current process.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      cutime - user time used by current process and children.
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      cstime - system time used by current process and children.
     </span>
    </li>
   </ul>
   The function returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.posix-times-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3598">
    <p><strong>Example #1 Example use of <span class="function"><strong>posix_times()</strong></span></strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$times </span><span style="color: #007700">= </span><span style="color: #0000BB">posix_times</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$times</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [ticks] =&gt; 25814410
    [utime] =&gt; 1
    [stime] =&gt; 1
    [cutime] =&gt; 0
    [cstime] =&gt; 0
)</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.posix-times-notes">
  <h3 class="title">Notes</h3>
  <div class="warning"><strong class="warning">Warning</strong>
   <p class="para">
    This function isn&#039;t reliable to use, it may return negative values for
    high times.
   </p>
  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/posix/functions/posix-times.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.posix-times%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.posix-times&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-times.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="33143">  <div class="votes">
    <div id="Vu33143">
    <a href="/manual/vote-note.php?id=33143&amp;page=function.posix-times&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33143">
    <a href="/manual/vote-note.php?id=33143&amp;page=function.posix-times&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33143" title="100% like this...">
    2
    </div>
  </div>
  <a href="#33143" class="name">
  <strong class="user"><em>murphy at nmc-online dot co dot uk</em></strong></a><a class="genanchor" href="#33143"> &para;</a><div class="date" title="2003-06-17 11:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33143">
<div class="phpcode"><code><span class="html">I am not sure why, and it could just be me but on my FreeBSD system using<br />$time = posix_times();<br />$time['ticks'] is an enormous value that bears no relation to the system uptime (I tested by rebooting the system,  the number does not change).<br />I checked my timecounters, they tick every 10.000msec and I did the maths on the returned value and it suggested the machine had been up for over 200 days - it was reformatted about a week ago.<br />This could be to do with FreeBSD, or *BSD, or just *idiots like me but just check before you use the function.<br /> ~<br />FreeBSD 5.1-R, Apache 2.0.46, PHP4.3.2</span></code></div>
  </div>
 </div>
  <div class="note" id="43589">  <div class="votes">
    <div id="Vu43589">
    <a href="/manual/vote-note.php?id=43589&amp;page=function.posix-times&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43589">
    <a href="/manual/vote-note.php?id=43589&amp;page=function.posix-times&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43589" title="100% like this...">
    1
    </div>
  </div>
  <a href="#43589" class="name">
  <strong class="user"><em>brain at winbot dot co dot uk</em></strong></a><a class="genanchor" href="#43589"> &para;</a><div class="date" title="2004-06-26 06:14"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43589">
<div class="phpcode"><code><span class="html">doesnt work with freebsd. as stated above the clock ticks at different intervals on different platforms.<br /><br />for system uptime consider piping the uptime command or similar, depending on if performance is an issue or not.</span></code></div>
  </div>
 </div>
  <div class="note" id="34253">  <div class="votes">
    <div id="Vu34253">
    <a href="/manual/vote-note.php?id=34253&amp;page=function.posix-times&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34253">
    <a href="/manual/vote-note.php?id=34253&amp;page=function.posix-times&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34253" title="no votes...">
    0
    </div>
  </div>
  <a href="#34253" class="name">
  <strong class="user"><em>not_rich_yet at hotmail dot com</em></strong></a><a class="genanchor" href="#34253"> &para;</a><div class="date" title="2003-07-19 04:21"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34253">
<div class="phpcode"><code><span class="html">If you want the output to be 'grammatically correct' then try the following code.  It will eg print '1 minute' as opposed to '1 minutes', the same goes for days and hours:<br /><br />Put the following code somewhere in the head of the page code:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">uptime</span><span class="keyword">() {<br />if (!</span><span class="default">$times </span><span class="keyword">= </span><span class="default">posix_times</span><span class="keyword">() ) {<br />return (</span><span class="string">"unknown"</span><span class="keyword">);<br />} else {<br /></span><span class="default">$now </span><span class="keyword">= </span><span class="default">$times</span><span class="keyword">[</span><span class="string">'ticks'</span><span class="keyword">];<br /></span><span class="default">$days </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$now </span><span class="keyword">/ (</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">));<br /></span><span class="default">$remainder </span><span class="keyword">= </span><span class="default">$now </span><span class="keyword">% (</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">$hours </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$remainder </span><span class="keyword">/ (</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">));<br /></span><span class="default">$remainder </span><span class="keyword">= </span><span class="default">$remainder </span><span class="keyword">% (</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">$minutes </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$remainder </span><span class="keyword">/ (</span><span class="default">60</span><span class="keyword">*</span><span class="default">100</span><span class="keyword">));<br />if (</span><span class="default">$days </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {</span><span class="default">$writeDays </span><span class="keyword">= </span><span class="string">"day"</span><span class="keyword">;} else {</span><span class="default">$writeDays </span><span class="keyword">= </span><span class="string">"days"</span><span class="keyword">;}<br />if (</span><span class="default">$hours </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {</span><span class="default">$writeHours </span><span class="keyword">= </span><span class="string">"hour"</span><span class="keyword">; } else {</span><span class="default">$writeHours </span><span class="keyword">= </span><span class="string">"hours"</span><span class="keyword">;}<br />if (</span><span class="default">$minutes </span><span class="keyword">== </span><span class="default">1</span><span class="keyword">) {</span><span class="default">$writeMins </span><span class="keyword">= </span><span class="string">"minute"</span><span class="keyword">;} else {</span><span class="default">$writeMins </span><span class="keyword">= </span><span class="string">"minutes"</span><span class="keyword">;}<br />return (</span><span class="string">"</span><span class="default">$days</span><span class="string"> </span><span class="default">$writeDays</span><span class="string">, </span><span class="default">$hours</span><span class="string"> </span><span class="default">$writeHours</span><span class="string">, </span><span class="default">$minutes</span><span class="string"> </span><span class="default">$writeMins</span><span class="string">"</span><span class="keyword">);<br />}<br />}<br /></span><span class="default">?&gt;<br /></span><br />Then put this bit where you want the info displayed:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print </span><span class="default">uptime</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Regards,<br /><br />nry</span></code></div>
  </div>
 </div>
  <div class="note" id="27025">  <div class="votes">
    <div id="Vu27025">
    <a href="/manual/vote-note.php?id=27025&amp;page=function.posix-times&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27025">
    <a href="/manual/vote-note.php?id=27025&amp;page=function.posix-times&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27025" title="no votes...">
    0
    </div>
  </div>
  <a href="#27025" class="name">
  <strong class="user"><em>rossz+php at vamos-wentworth dot org</em></strong></a><a class="genanchor" href="#27025"> &para;</a><div class="date" title="2002-11-20 01:42"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27025">
<div class="phpcode"><code><span class="html">This function will return the system uptime as a human readable string such as "172 days, 18 hours, 15 minutes".  I didn't bother to handle singular so the grammar could be a bit off, e.g. 1 hours.<br /><br />function uptime() {<br />  if (!$times = posix_times()) {<br />    return ("unknown");<br />  } else {<br />    $now = $times['ticks'];<br />    $days = intval($now / (60*60*24*100));<br />    $remainder = $now % (60*60*24*100);<br />    $hours = intval($remainder / (60*60*100));<br />    $remainder = $remainder % (60*60*100);<br />    $minutes = intval($remainder / (60*100));<br />    return ("$days days, $hours hours, $minutes minutes");<br />  }<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.posix-times&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-times.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.posix.php">POSIX Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.posix-access.php" title="posix_&#8203;access">posix_&#8203;access</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-ctermid.php" title="posix_&#8203;ctermid">posix_&#8203;ctermid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-eaccess.php" title="posix_&#8203;eaccess">posix_&#8203;eaccess</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-errno.php" title="posix_&#8203;errno">posix_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-fpathconf.php" title="posix_&#8203;fpathconf">posix_&#8203;fpathconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-get-last-error.php" title="posix_&#8203;get_&#8203;last_&#8203;error">posix_&#8203;get_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getcwd.php" title="posix_&#8203;getcwd">posix_&#8203;getcwd</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getegid.php" title="posix_&#8203;getegid">posix_&#8203;getegid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-geteuid.php" title="posix_&#8203;geteuid">posix_&#8203;geteuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgid.php" title="posix_&#8203;getgid">posix_&#8203;getgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgrgid.php" title="posix_&#8203;getgrgid">posix_&#8203;getgrgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgrnam.php" title="posix_&#8203;getgrnam">posix_&#8203;getgrnam</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getgroups.php" title="posix_&#8203;getgroups">posix_&#8203;getgroups</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getlogin.php" title="posix_&#8203;getlogin">posix_&#8203;getlogin</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpgid.php" title="posix_&#8203;getpgid">posix_&#8203;getpgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpgrp.php" title="posix_&#8203;getpgrp">posix_&#8203;getpgrp</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpid.php" title="posix_&#8203;getpid">posix_&#8203;getpid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getppid.php" title="posix_&#8203;getppid">posix_&#8203;getppid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpwnam.php" title="posix_&#8203;getpwnam">posix_&#8203;getpwnam</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getpwuid.php" title="posix_&#8203;getpwuid">posix_&#8203;getpwuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getrlimit.php" title="posix_&#8203;getrlimit">posix_&#8203;getrlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getsid.php" title="posix_&#8203;getsid">posix_&#8203;getsid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-getuid.php" title="posix_&#8203;getuid">posix_&#8203;getuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-initgroups.php" title="posix_&#8203;initgroups">posix_&#8203;initgroups</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-isatty.php" title="posix_&#8203;isatty">posix_&#8203;isatty</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-kill.php" title="posix_&#8203;kill">posix_&#8203;kill</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-mkfifo.php" title="posix_&#8203;mkfifo">posix_&#8203;mkfifo</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-mknod.php" title="posix_&#8203;mknod">posix_&#8203;mknod</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-pathconf.php" title="posix_&#8203;pathconf">posix_&#8203;pathconf</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setegid.php" title="posix_&#8203;setegid">posix_&#8203;setegid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-seteuid.php" title="posix_&#8203;seteuid">posix_&#8203;seteuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setgid.php" title="posix_&#8203;setgid">posix_&#8203;setgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setpgid.php" title="posix_&#8203;setpgid">posix_&#8203;setpgid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setrlimit.php" title="posix_&#8203;setrlimit">posix_&#8203;setrlimit</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setsid.php" title="posix_&#8203;setsid">posix_&#8203;setsid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-setuid.php" title="posix_&#8203;setuid">posix_&#8203;setuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-strerror.php" title="posix_&#8203;strerror">posix_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-sysconf.php" title="posix_&#8203;sysconf">posix_&#8203;sysconf</a>
                        </li>
                                                <li class="current">
                            <a href="function.posix-times.php" title="posix_&#8203;times">posix_&#8203;times</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-ttyname.php" title="posix_&#8203;ttyname">posix_&#8203;ttyname</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-uname.php" title="posix_&#8203;uname">posix_&#8203;uname</a>
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
