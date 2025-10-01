<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: usleep - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.usleep.php">
 <link rel="shorturl" href="https://www.php.net/usleep">
 <link rel="alternate" href="https://www.php.net/usleep" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.unpack.php">
 <link rel="next" href="https://www.php.net/manual/en/changelog.misc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.usleep.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.usleep.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.usleep.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.usleep.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.usleep.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.usleep.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.usleep.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.usleep.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.usleep.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.usleep.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.usleep.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Delay execution in microseconds" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: usleep - Manual" />
<meta name="twitter:description" content="Delay execution in microseconds" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: usleep - Manual" />
<meta itemprop="description" content="Delay execution in microseconds" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Delay execution in microseconds" />

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
        <a href="changelog.misc.php">
          Changelog &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.unpack.php">
          &laquo; unpack        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.misc.php'>Misc.</a></li>      <li><a href='ref.misc.php'>Misc. Functions</a></li>      </ul>
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
            <option value='en/function.usleep.php' selected="selected">English</option>
            <option value='de/function.usleep.php'>German</option>
            <option value='es/function.usleep.php'>Spanish</option>
            <option value='fr/function.usleep.php'>French</option>
            <option value='it/function.usleep.php'>Italian</option>
            <option value='ja/function.usleep.php'>Japanese</option>
            <option value='pt_BR/function.usleep.php'>Brazilian Portuguese</option>
            <option value='ru/function.usleep.php'>Russian</option>
            <option value='tr/function.usleep.php'>Turkish</option>
            <option value='uk/function.usleep.php'>Ukrainian</option>
            <option value='zh/function.usleep.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.usleep" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">usleep</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">usleep</span> &mdash; <span class="dc-title">Delay execution in microseconds</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.usleep-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>usleep</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$microseconds</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Delays program execution for the given number of microseconds.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.usleep-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">microseconds</code></dt>
     <dd>
      <p class="para">
       Halt time in microseconds. A microsecond is one millionth of a
       second.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        Values larger than <code class="literal">1000000</code> (i.e. sleeping for more than a second)
        may not be supported by the operating system. Use <span class="function"><a href="function.sleep.php" class="function">sleep()</a></span> instead.
       </span>
      </p></blockquote>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <span class="simpara">
        The sleep may be lengthened slightly (i.e. may be longer than <code class="parameter">microseconds</code>)
        by any system activity or by the time spent processing the call or by the granularity of system timers.
       </span>
      </p></blockquote>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.usleep-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.usleep-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3768">
    <p><strong>Example #1 <span class="function"><strong>usleep()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// Current time<br /></span><span style="color: #007700">echo (new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'now'</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:i:s.v'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// wait for 2 milliseconds<br /></span><span style="color: #0000BB">usleep</span><span style="color: #007700">(</span><span style="color: #0000BB">2000</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// back!<br /></span><span style="color: #007700">echo (new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'now'</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:i:s.v'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// wait for 30 milliseconds<br /></span><span style="color: #0000BB">usleep</span><span style="color: #007700">(</span><span style="color: #0000BB">30000</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// back again!<br /></span><span style="color: #007700">echo (new </span><span style="color: #0000BB">DateTime</span><span style="color: #007700">(</span><span style="color: #DD0000">'now'</span><span style="color: #007700">))-&gt;</span><span style="color: #0000BB">format</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:i:s.v'</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">11:13:28.005
11:13:28.007
11:13:28.037</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.usleep-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.sleep.php" class="function" rel="rdfs-seeAlso">sleep()</a> - Delay execution</span></li>
    <li><span class="function"><a href="function.time-nanosleep.php" class="function" rel="rdfs-seeAlso">time_nanosleep()</a> - Delay for a number of seconds and nanoseconds</span></li>
    <li><span class="function"><a href="function.time-sleep-until.php" class="function" rel="rdfs-seeAlso">time_sleep_until()</a> - Make the script sleep until the specified time</span></li>
    <li><span class="function"><a href="function.set-time-limit.php" class="function" rel="rdfs-seeAlso">set_time_limit()</a> - Limits the maximum execution time</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/usleep.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.usleep%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.usleep&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.usleep.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75399">  <div class="votes">
    <div id="Vu75399">
    <a href="/manual/vote-note.php?id=75399&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75399">
    <a href="/manual/vote-note.php?id=75399&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75399" title="59% like this...">
    40
    </div>
  </div>
  <a href="#75399" class="name">
  <strong class="user"><em>Docey</em></strong></a><a class="genanchor" href="#75399"> &para;</a><div class="date" title="2007-05-27 02:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75399">
<div class="phpcode"><code><span class="html">the idea of sleep and usleep is that by letting the cpu run a few idle cycles so the other programs can have some cycles run of their own. what results in better response times and lower overall system-load. so if you have to wait for something, go to sleep for a few seconds instead of occupying the cpu while doing absolute nothing but waitting.</span></code></div>
  </div>
 </div>
  <div class="note" id="118258">  <div class="votes">
    <div id="Vu118258">
    <a href="/manual/vote-note.php?id=118258&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118258">
    <a href="/manual/vote-note.php?id=118258&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118258" title="60% like this...">
    8
    </div>
  </div>
  <a href="#118258" class="name">
  <strong class="user"><em>m dot prowler at gmail dot com</em></strong></a><a class="genanchor" href="#118258"> &para;</a><div class="date" title="2015-11-04 07:26"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118258">
<div class="phpcode"><code><span class="html">On both MacOS X and Linux the usleep() call seems to consume CPU cycles, whereas sleep() and time_nanosleep() do not. This was the same on PHP 5.3.29 and 5.5.29.<br /><br />I used a loop with just a call to sleep/usleep/time_nanosleep, and compared them all with an empty loop. Obviously the empty loop consumed 99% of the CPU, sleep used 0%, usleep used 3% for 1000ms and 6% for 100ms, and time_nanosleep used 0% for both 500ms and 1000ms.</span></code></div>
  </div>
 </div>
  <div class="note" id="61424">  <div class="votes">
    <div id="Vu61424">
    <a href="/manual/vote-note.php?id=61424&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd61424">
    <a href="/manual/vote-note.php?id=61424&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V61424" title="58% like this...">
    4
    </div>
  </div>
  <a href="#61424" class="name">
  <strong class="user"><em>gizmo at aoaforums dot com</em></strong></a><a class="genanchor" href="#61424"> &para;</a><div class="date" title="2006-02-02 09:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom61424">
<div class="phpcode"><code><span class="html">It should be noted that Windows machines have a resolution of either 10 mS or 15 mS (depending on the chipset implementation and HAL used) when using the Sleep() function in kernel32.dll.  This means that your average error will be either 5 or 7.5 mS.  This is not ordinarily a problem unless you really NEED to sleep for less time than the granularity provided by Windows.</span></code></div>
  </div>
 </div>
  <div class="note" id="28606">  <div class="votes">
    <div id="Vu28606">
    <a href="/manual/vote-note.php?id=28606&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28606">
    <a href="/manual/vote-note.php?id=28606&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28606" title="54% like this...">
    3
    </div>
  </div>
  <a href="#28606" class="name">
  <strong class="user"><em>busby at edoceo dot com</em></strong></a><a class="genanchor" href="#28606"> &para;</a><div class="date" title="2003-01-17 04:04"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28606">
<div class="phpcode"><code><span class="html">Should be noted that functions that loop really fast to create a delay also consume 100% CPU while doing the loop.  Try creating a dummy loop that goes 100000 times, watch it choke your machine.  If you really need usleep() don't use windows.</span></code></div>
  </div>
 </div>
  <div class="note" id="54572">  <div class="votes">
    <div id="Vu54572">
    <a href="/manual/vote-note.php?id=54572&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54572">
    <a href="/manual/vote-note.php?id=54572&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54572" title="54% like this...">
    2
    </div>
  </div>
  <a href="#54572" class="name">
  <strong class="user"><em>gmc at serveisw3 dot net</em></strong></a><a class="genanchor" href="#54572"> &para;</a><div class="date" title="2005-07-07 09:11"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54572">
<div class="phpcode"><code><span class="html">If you're using Windows then you maybe are in trouble with usleep if you really need to use it.<br /><br />The Bernie's microdelay function using fsockopen does not work properly, and the fclose doesn't help much.<br /><br />I don't know if network connections go strange, but I know it does not work since you've made more than 2000 - 3000 calls to it, so it's not a reliable solution in 'long life' php scripts, or these are the issues of the microdelay function in my PHP and PHP-GTK applications.<br /><br />Though another solution should be found, and googling a bit I fount a WinAPI function: Sleep.<br /><br />So I get with this snippet wich works fine for me, you get milliseconds precission but the more important, it works for long-run scripts and of course, it does not waste any CPU cycles.<br /><br />dl('php_w32api.dll');<br /><br />$GLOBALS['win32api'] =&amp; new win32;<br /><br />// USleep alternative for Windows and PHP4:<br />$GLOBALS['win32api']-&gt;registerfunction("long Sleep (long dwMillisecods) From kernel32.dll");<br /><br />// Now you can call the function from everywhere in your script: $GLOBALS['win32api']-&gt;Sleep(milliseconds);<br /><br />for ($msec = 2000; $msec &gt; 0; $msec = $msec - 125) {<br />  echo "Hi. Next one in $msec msec.\n";<br />  $GLOBALS['win32api']-&gt;Sleep($msec);<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="37827">  <div class="votes">
    <div id="Vu37827">
    <a href="/manual/vote-note.php?id=37827&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37827">
    <a href="/manual/vote-note.php?id=37827&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37827" title="50% like this...">
    0
    </div>
  </div>
  <a href="#37827" class="name">
  <strong class="user"><em>Bertie</em></strong></a><a class="genanchor" href="#37827"> &para;</a><div class="date" title="2003-11-28 11:47"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37827">
<div class="phpcode"><code><span class="html">A word of warning about the microdelay() code posted that uses the fsockopen - if you use this is a loop that delays for small periods you will very quickly run out of sockets/socket buffer space. And then your network connections go very strange......</span></code></div>
  </div>
 </div>
  <div class="note" id="69109">  <div class="votes">
    <div id="Vu69109">
    <a href="/manual/vote-note.php?id=69109&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69109">
    <a href="/manual/vote-note.php?id=69109&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69109" title="48% like this...">
    -1
    </div>
  </div>
  <a href="#69109" class="name">
  <strong class="user"><em>Rasmus Schultz</em></strong></a><a class="genanchor" href="#69109"> &para;</a><div class="date" title="2006-08-23 06:39"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69109">
<div class="phpcode"><code><span class="html">I have spent DAYS trying to create a reliable usleep()-replacement for Windows.<br /><br />I have only this to offer:<br /><br />As commented by someone else already, the gettimeofday() method used below is useless - PHP will use all available CPU power doing nothing.<br /><br />The fsockopen() method apparently is also useless - as someone else commented, an fclose() was missing in the original post, but this apparently does not solve the problem. After calling the function about 50 or so times, fsockopen() returns immidiately, without any delay - and watching a process monitor in Windows, you can then watch the process taking up increasingly more memory, until eventually PHP aborts (or crashes) when it reaches maximum.<br /><br />The win32api-method is also a no-go ... after calling the Sleep function a few hundred times (during which memory usage will also go up every time due to a memory leak somewhere), PHP will cause an exception and Windows will terminate it.<br /><br />I have given up - I don't think there is any viable solution to this problem under PHP 4.<br /><br />If you need this function, upgrade your project to PHP 5.<br /><br />Or settle for 1-second delays with the sleep()-function.<br /><br />These, unfortunately, seem to be your only options...</span></code></div>
  </div>
 </div>
  <div class="note" id="123008">  <div class="votes">
    <div id="Vu123008">
    <a href="/manual/vote-note.php?id=123008&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123008">
    <a href="/manual/vote-note.php?id=123008&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123008" title="42% like this...">
    -3
    </div>
  </div>
  <a href="#123008" class="name">
  <strong class="user"><em>septerrianin at mail dot ru</em></strong></a><a class="genanchor" href="#123008"> &para;</a><div class="date" title="2018-08-06 09:51"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123008">
<div class="phpcode"><code><span class="html">Note that this function has an overhead!<br /><br />Example:<br /><span class="default">&lt;?php<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">; ++</span><span class="default">$i</span><span class="keyword">)<br />{<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span> <br /><br />This block is running about 70 seconds on my server.<br />Script take about 70 microseconds for every usleep() function call.</span></code></div>
  </div>
 </div>
  <div class="note" id="72284">  <div class="votes">
    <div id="Vu72284">
    <a href="/manual/vote-note.php?id=72284&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72284">
    <a href="/manual/vote-note.php?id=72284&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72284" title="44% like this...">
    -4
    </div>
  </div>
  <a href="#72284" class="name">
  <strong class="user"><em>Mike at SevenCode dot com</em></strong></a><a class="genanchor" href="#72284"> &para;</a><div class="date" title="2007-01-11 03:36"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72284">
<div class="phpcode"><code><span class="html">Dude you are SO the man for that code snippet. It worked like a charm. I just wanted to point out a couple things and offer my own improvement.<br /><br />1. If you're like me, you were probably wondering why the socket had to keep being recreated on each call, and why you couldn't just create a static socket. Its because socket_select assumes you're passing in a pointer, and will alter the variable on return to reflect the actual sockets that were changed.<br /><br />2. I couldn't figure out for the life of me why socket_select wasn't defined. Its because you hadn't enabled the right extension in php.ini<br /><br />Ok so heres my slight improvement. The only real thing I did is use a static variable for the socket, to avoid creating a brand new socket on each call of this function. I'm not sure if socket creation will cause things to crash down the line like the other problems reported on here, but if you ask me better safe then sorry.<br /><br />function Sleeper($mSec)<br />{<br />    //    For dummies like me who spent 5 minutes<br />    //    wondering why socket_create wasn't defined<br />    if(!function_exists('socket_create')){<br />        die("Please enable extension php_sockets.dll");<br />    }<br /><br />    //    So the socket is only created once<br />    static $socket=false;<br />    if($socket===false){<br />        $socket=array(socket_create(AF_INET,SOCK_RAW,0));<br />    }<br />    $pSock=$socket;<br />    <br />    //    Calc time<br />    $uSex = $mSec * 1000;<br /><br />    //    Do the waiting<br />    socket_select($read=NULL,$write=NULL,$pSock,0,$uSex);<br />    <br />    //    OCD<br />    return true;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="10337">  <div class="votes">
    <div id="Vu10337">
    <a href="/manual/vote-note.php?id=10337&amp;page=function.usleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10337">
    <a href="/manual/vote-note.php?id=10337&amp;page=function.usleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10337" title="43% like this...">
    -3
    </div>
  </div>
  <a href="#10337" class="name">
  <strong class="user"><em>dave at techweavers dot net</em></strong></a><a class="genanchor" href="#10337"> &para;</a><div class="date" title="2000-12-28 07:29"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10337">
<div class="phpcode"><code><span class="html">To monitor a scripts CPU ussage and avoid any nasty CPU gobbling loops you can use this function (will not work with windows or safe mode) I know it works on FreeBSD:
<br />function phpmon($max)
<br /> {
<br /> $cmd = `ps -Unobody -r -o%cpu`;
<br /> $lines = explode("\n", $cmd);
<br /> $usage = substr($lines[1], 0, strpos($lines[1], "."));
<br /> $sleeprate = 500;
<br /> while ($usage &gt;= $max)
<br />  {
<br />  $cmd = `ps -Unobody -r -o%cpu`;
<br />  $lines = explode("\n", $cmd);
<br />  $usage = substr($lines[1], 0, strpos($lines[1], "."));
<br />  usleep($sleeprate);
<br />  }
<br /> }
<br />
<br />phpmon($MAX); 
<br />
<br />where $MAX is the maximum CPU you want the process to consume. e-mail me with any improvements/suggestions.
<br />
<br />I have noticed that this consumes a lot of system CPU (at least in my limited testing) possibly from all of the system calls or the huge mathematical functions I used to test the effectiveness of the script.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.usleep&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.usleep.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.misc.php">Misc. Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.connection-aborted.php" title="connection_&#8203;aborted">connection_&#8203;aborted</a>
                        </li>
                                                <li class="">
                            <a href="function.connection-status.php" title="connection_&#8203;status">connection_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.constant.php" title="constant">constant</a>
                        </li>
                                                <li class="">
                            <a href="function.define.php" title="define">define</a>
                        </li>
                                                <li class="">
                            <a href="function.defined.php" title="defined">defined</a>
                        </li>
                                                <li class="">
                            <a href="function.die.php" title="die">die</a>
                        </li>
                                                <li class="">
                            <a href="function.eval.php" title="eval">eval</a>
                        </li>
                                                <li class="">
                            <a href="function.exit.php" title="exit">exit</a>
                        </li>
                                                <li class="">
                            <a href="function.get-browser.php" title="get_&#8203;browser">get_&#8203;browser</a>
                        </li>
                                                <li class="">
                            <a href="function.halt-compiler.php" title="_&#8203;_&#8203;halt_&#8203;compiler">_&#8203;_&#8203;halt_&#8203;compiler</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-file.php" title="highlight_&#8203;file">highlight_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.highlight-string.php" title="highlight_&#8203;string">highlight_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.hrtime.php" title="hrtime">hrtime</a>
                        </li>
                                                <li class="">
                            <a href="function.ignore-user-abort.php" title="ignore_&#8203;user_&#8203;abort">ignore_&#8203;user_&#8203;abort</a>
                        </li>
                                                <li class="">
                            <a href="function.pack.php" title="pack">pack</a>
                        </li>
                                                <li class="">
                            <a href="function.php-strip-whitespace.php" title="php_&#8203;strip_&#8203;whitespace">php_&#8203;strip_&#8203;whitespace</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-conv.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;conv">sapi_&#8203;windows_&#8203;cp_&#8203;conv</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-get.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;get">sapi_&#8203;windows_&#8203;cp_&#8203;get</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-is-utf8.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8">sapi_&#8203;windows_&#8203;cp_&#8203;is_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-cp-set.php" title="sapi_&#8203;windows_&#8203;cp_&#8203;set">sapi_&#8203;windows_&#8203;cp_&#8203;set</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-generate-ctrl-event.php" title="sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event">sapi_&#8203;windows_&#8203;generate_&#8203;ctrl_&#8203;event</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-set-ctrl-handler.php" title="sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler">sapi_&#8203;windows_&#8203;set_&#8203;ctrl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.sapi-windows-vt100-support.php" title="sapi_&#8203;windows_&#8203;vt100_&#8203;support">sapi_&#8203;windows_&#8203;vt100_&#8203;support</a>
                        </li>
                                                <li class="">
                            <a href="function.show-source.php" title="show_&#8203;source">show_&#8203;source</a>
                        </li>
                                                <li class="">
                            <a href="function.sleep.php" title="sleep">sleep</a>
                        </li>
                                                <li class="">
                            <a href="function.sys-getloadavg.php" title="sys_&#8203;getloadavg">sys_&#8203;getloadavg</a>
                        </li>
                                                <li class="">
                            <a href="function.time-nanosleep.php" title="time_&#8203;nanosleep">time_&#8203;nanosleep</a>
                        </li>
                                                <li class="">
                            <a href="function.time-sleep-until.php" title="time_&#8203;sleep_&#8203;until">time_&#8203;sleep_&#8203;until</a>
                        </li>
                                                <li class="">
                            <a href="function.uniqid.php" title="uniqid">uniqid</a>
                        </li>
                                                <li class="">
                            <a href="function.unpack.php" title="unpack">unpack</a>
                        </li>
                                                <li class="current">
                            <a href="function.usleep.php" title="usleep">usleep</a>
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
