<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: sleep - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.sleep.php">
 <link rel="shorturl" href="https://www.php.net/sleep">
 <link rel="alternate" href="https://www.php.net/sleep" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.misc.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.show-source.php">
 <link rel="next" href="https://www.php.net/manual/en/function.sys-getloadavg.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.sleep.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.sleep.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.sleep.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.sleep.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.sleep.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.sleep.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.sleep.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.sleep.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.sleep.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.sleep.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.sleep.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Delay execution" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: sleep - Manual" />
<meta name="twitter:description" content="Delay execution" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: sleep - Manual" />
<meta itemprop="description" content="Delay execution" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Delay execution" />

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
        <a href="function.sys-getloadavg.php">
          sys_getloadavg &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.show-source.php">
          &laquo; show_source        </a>
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
            <option value='en/function.sleep.php' selected="selected">English</option>
            <option value='de/function.sleep.php'>German</option>
            <option value='es/function.sleep.php'>Spanish</option>
            <option value='fr/function.sleep.php'>French</option>
            <option value='it/function.sleep.php'>Italian</option>
            <option value='ja/function.sleep.php'>Japanese</option>
            <option value='pt_BR/function.sleep.php'>Brazilian Portuguese</option>
            <option value='ru/function.sleep.php'>Russian</option>
            <option value='tr/function.sleep.php'>Turkish</option>
            <option value='uk/function.sleep.php'>Ukrainian</option>
            <option value='zh/function.sleep.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.sleep" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">sleep</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">sleep</span> &mdash; <span class="dc-title">Delay execution</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.sleep-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>sleep</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$seconds</code></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="simpara">
   Delays the program execution for the given number of
   <code class="parameter">seconds</code>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    In order to delay program execution for a fraction of a second, use <span class="function"><a href="function.usleep.php" class="function">usleep()</a></span>
    as the <span class="function"><strong>sleep()</strong></span> function expects an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>. For example, <code class="code">sleep(0.25)</code> will
    pause program execution for <code class="literal">0</code> seconds.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.sleep-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">seconds</code></dt>
     <dd>
      <p class="para">
       Halt time in seconds (must be greater than or equal to <code class="literal">0</code>).
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.sleep-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns zero on success.
  </p>
  <p class="para">
   If the call was interrupted by a signal, <span class="function"><strong>sleep()</strong></span> returns
   a non-zero value. On Windows, this value will always be
   <code class="literal">192</code> (the value of the
   <strong><code>WAIT_IO_COMPLETION</code></strong> constant within the Windows API).
   On other platforms, the return value will be the number of seconds left to
   sleep.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-function.sleep-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If the specified number of <code class="parameter">seconds</code> is negative,
   this function will throw a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.sleep-changelog">
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
       The function throws a <span class="classname"><a href="class.valueerror.php" class="classname">ValueError</a></span> on negative <code class="parameter">seconds</code>;
       previously, an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> was raised instead, and the function returned <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.sleep-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3760">
    <p><strong>Example #1 <span class="function"><strong>sleep()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// current time<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'h:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// sleep for 10 seconds<br /></span><span style="color: #0000BB">sleep</span><span style="color: #007700">(</span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// wake up !<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'h:i:s'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>
     This example will output (after 10 seconds)
    </p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">05:31:23
05:31:33</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.sleep-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.usleep.php" class="function" rel="rdfs-seeAlso">usleep()</a> - Delay execution in microseconds</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/misc/functions/sleep.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.sleep%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.sleep&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sleep.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114841">  <div class="votes">
    <div id="Vu114841">
    <a href="/manual/vote-note.php?id=114841&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114841">
    <a href="/manual/vote-note.php?id=114841&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114841" title="62% like this...">
    51
    </div>
  </div>
  <a href="#114841" class="name">
  <strong class="user"><em>ash b</em></strong></a><a class="genanchor" href="#114841"> &para;</a><div class="date" title="2014-04-13 09:56"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114841">
<div class="phpcode"><code><span class="html">re: "mitigating the chances of a full bruit force attack by a limit of 30 lookups a minute."<br /><br />Not really - the attacker could do 100 requests. Each request might take 2 seconds but it doesn't stop the number of requests done. You need to stop processing more than one request every 2 seconds rather than delay it by 2 seconds on each execution.</span></code></div>
  </div>
 </div>
  <div class="note" id="33732">  <div class="votes">
    <div id="Vu33732">
    <a href="/manual/vote-note.php?id=33732&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd33732">
    <a href="/manual/vote-note.php?id=33732&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V33732" title="55% like this...">
    42
    </div>
  </div>
  <a href="#33732" class="name">
  <strong class="user"><em>MPHH</em></strong></a><a class="genanchor" href="#33732"> &para;</a><div class="date" title="2003-07-05 12:33"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom33732">
<div class="phpcode"><code><span class="html">Note: The set_time_limit() function and the configuration directive max_execution_time only affect the execution time of the script itself. Any time spent on activity that happens outside the execution of the script such as system calls using system(), the sleep() function, database queries, etc. is not included when determining the maximum time that the script has been running.</span></code></div>
  </div>
 </div>
  <div class="note" id="105903">  <div class="votes">
    <div id="Vu105903">
    <a href="/manual/vote-note.php?id=105903&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105903">
    <a href="/manual/vote-note.php?id=105903&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105903" title="53% like this...">
    29
    </div>
  </div>
  <a href="#105903" class="name">
  <strong class="user"><em>barlow at fhtsolutions dot com</em></strong></a><a class="genanchor" href="#105903"> &para;</a><div class="date" title="2011-09-24 06:33"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105903">
<div class="phpcode"><code><span class="html">You should put sleep into both the pass and fail branches, since an attacker can check whether the response is slow and use that as an indicator - cutting down the delay time. But a delay in both branches eliminates this possibility.</span></code></div>
  </div>
 </div>
  <div class="note" id="118635">  <div class="votes">
    <div id="Vu118635">
    <a href="/manual/vote-note.php?id=118635&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118635">
    <a href="/manual/vote-note.php?id=118635&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118635" title="59% like this...">
    21
    </div>
  </div>
  <a href="#118635" class="name">
  <strong class="user"><em>Diego Andrade</em></strong></a><a class="genanchor" href="#118635"> &para;</a><div class="date" title="2016-01-13 06:29"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118635">
<div class="phpcode"><code><span class="html">Maybe obvious, but this my function to delay script execution using decimals for seconds (to mimic sleep(1.5) for example):<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * Delays execution of the script by the given time.<br /> * @param mixed $time Time to pause script execution. Can be expressed<br /> * as an integer or a decimal.<br /> * @example msleep(1.5); // delay for 1.5 seconds<br /> * @example msleep(.1); // delay for 100 milliseconds<br /> */<br /></span><span class="keyword">function </span><span class="default">msleep</span><span class="keyword">(</span><span class="default">$time</span><span class="keyword">)<br />{<br />    </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$time </span><span class="keyword">* </span><span class="default">1000000</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="129205">  <div class="votes">
    <div id="Vu129205">
    <a href="/manual/vote-note.php?id=129205&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129205">
    <a href="/manual/vote-note.php?id=129205&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129205" title="66% like this...">
    3
    </div>
  </div>
  <a href="#129205" class="name">
  <strong class="user"><em>John</em></strong></a><a class="genanchor" href="#129205"> &para;</a><div class="date" title="2024-01-30 03:09"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129205">
<div class="phpcode"><code><span class="html">To avoid using usleep function that is not working on every operating system, below a function that should have the same behavior :<br /><br />function wait(int $millisecond = 0) {<br />    if (0 !== $millisecond) {<br />        $seconds = (int) ($millisecond / 1000);<br />        $nanoSeconds = ($millisecond % 1000) * 1000000;<br />        time_nanosleep($seconds, $nanoSeconds);<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="122848">  <div class="votes">
    <div id="Vu122848">
    <a href="/manual/vote-note.php?id=122848&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122848">
    <a href="/manual/vote-note.php?id=122848&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122848" title="57% like this...">
    8
    </div>
  </div>
  <a href="#122848" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#122848"> &para;</a><div class="date" title="2018-06-17 10:18"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122848">
<div class="phpcode"><code><span class="html">Diego Andrade's msleep function is not compatible with php7's `strict_types`, cast the usleep parameter to int, and it will be, <br /> usleep((int)($time * 1000000));</span></code></div>
  </div>
 </div>
  <div class="note" id="127652">  <div class="votes">
    <div id="Vu127652">
    <a href="/manual/vote-note.php?id=127652&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127652">
    <a href="/manual/vote-note.php?id=127652&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127652" title="54% like this...">
    1
    </div>
  </div>
  <a href="#127652" class="name">
  <strong class="user"><em>ealexs at gmail dot com</em></strong></a><a class="genanchor" href="#127652"> &para;</a><div class="date" title="2022-09-20 08:29"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127652">
<div class="phpcode"><code><span class="html">From my testing calling sleep(0); will do a `thread spin`.<br />It would be nice if this was to be put explicitly in the documentation as it is useful. You can do the minimum wait without overloading the CPU thread.</span></code></div>
  </div>
 </div>
  <div class="note" id="8054">  <div class="votes">
    <div id="Vu8054">
    <a href="/manual/vote-note.php?id=8054&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8054">
    <a href="/manual/vote-note.php?id=8054&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8054" title="51% like this...">
    8
    </div>
  </div>
  <a href="#8054" class="name">
  <strong class="user"><em>hartmut at six dot de</em></strong></a><a class="genanchor" href="#8054"> &para;</a><div class="date" title="2000-08-25 06:38"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom8054">
<div class="phpcode"><code><span class="html">it is a bad idea to use sleep() for delayed output effects as
<br />
<br />1) you have to flush() output before you sleep
<br />
<br />2) depending on your setup flush() will not work all the way to the browser as the web server might apply buffering of its own or the browser might not render output it thinks not to be complete
<br />
<br />netscape for example will only display complete lines and will not show table parts until the &lt;/table&gt; tag arrived
<br />
<br />so use sleep if you have to wait  for events and don't want to burn  to much cycles, but don't use it for silly delayed output effects!</span></code></div>
  </div>
 </div>
  <div class="note" id="114588">  <div class="votes">
    <div id="Vu114588">
    <a href="/manual/vote-note.php?id=114588&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114588">
    <a href="/manual/vote-note.php?id=114588&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114588" title="50% like this...">
    1
    </div>
  </div>
  <a href="#114588" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#114588"> &para;</a><div class="date" title="2014-03-10 06:35"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114588">
<div class="phpcode"><code><span class="html">If you are having issues with sleep() and usleep() not responding as you feel they should, take a look at session_write_close()<br /><br />as noted by anonymous on comments;<br />"If the ajax function doesn't do session_write_close(), then your outer page will appear to hang, and opening other pages in new tabs will also stall."</span></code></div>
  </div>
 </div>
  <div class="note" id="126400">  <div class="votes">
    <div id="Vu126400">
    <a href="/manual/vote-note.php?id=126400&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126400">
    <a href="/manual/vote-note.php?id=126400&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126400" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126400" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#126400"> &para;</a><div class="date" title="2021-09-08 08:08"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126400">
<div class="phpcode"><code><span class="html">I wrote a simple method for sleeping with a float, which also allows you to do milliseconds (via fractional seconds).<br /><br /><span class="default">&lt;?php<br />  </span><span class="keyword">function </span><span class="default">sleepFloatSecs</span><span class="keyword">(</span><span class="default">$secs</span><span class="keyword">) {<br />    </span><span class="default">$intSecs </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$secs</span><span class="keyword">);<br />    </span><span class="default">$microSecs </span><span class="keyword">= (</span><span class="default">$secs </span><span class="keyword">- </span><span class="default">$intSecs</span><span class="keyword">) * </span><span class="default">1000000</span><span class="keyword">;<br /><br />    if(</span><span class="default">$intSecs </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />      </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$intSecs</span><span class="keyword">);<br />    }<br />    if(</span><span class="default">$microSecs </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />      </span><span class="default">usleep</span><span class="keyword">(</span><span class="default">$microSecs</span><span class="keyword">);<br />    }<br />  }<br /></span><span class="default">?&gt;<br /></span><br />And testing on my machine it works perfectly:<br /><br /><span class="default">&lt;?php<br />  $x </span><span class="keyword">= [</span><span class="default">0.100</span><span class="keyword">,</span><span class="default">0.250</span><span class="keyword">,</span><span class="default">0.5</span><span class="keyword">,</span><span class="default">1.0</span><span class="keyword">,</span><span class="default">1.5</span><span class="keyword">,</span><span class="default">2.0</span><span class="keyword">,</span><span class="default">2.5</span><span class="keyword">];<br /><br />  foreach(</span><span class="default">$x </span><span class="keyword">as </span><span class="default">$secs</span><span class="keyword">) {<br />    </span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />    </span><span class="default">sleepFloatSecs</span><span class="keyword">(</span><span class="default">$secs</span><span class="keyword">);<br />    </span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">) - </span><span class="default">$t</span><span class="keyword">;<br />    echo </span><span class="string">"</span><span class="default">$secs</span><span class="string"> \t =&gt; \t </span><span class="default">$t</span><span class="string">\n"</span><span class="keyword">;<br />  }<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br /><span class="default">&lt;?php<br />  0.1     </span><span class="keyword">=&gt;    </span><span class="default">0.10017800331116<br />  0.25    </span><span class="keyword">=&gt;    </span><span class="default">0.25016593933105<br />  0.5     </span><span class="keyword">=&gt;    </span><span class="default">0.50015211105347<br />  1       </span><span class="keyword">=&gt;    </span><span class="default">1.0001430511475<br />  1.5     </span><span class="keyword">=&gt;    </span><span class="default">1.5003218650818<br />  2       </span><span class="keyword">=&gt;    </span><span class="default">2.000167131424<br />  2.5     </span><span class="keyword">=&gt;    </span><span class="default">2.5002470016479<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125934">  <div class="votes">
    <div id="Vu125934">
    <a href="/manual/vote-note.php?id=125934&amp;page=function.sleep&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125934">
    <a href="/manual/vote-note.php?id=125934&amp;page=function.sleep&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125934" title="36% like this...">
    -3
    </div>
  </div>
  <a href="#125934" class="name">
  <strong class="user"><em>smcbride at msn dot com</em></strong></a><a class="genanchor" href="#125934"> &para;</a><div class="date" title="2021-03-15 08:55"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125934">
<div class="phpcode"><code><span class="html">An example of using sleep to run a set of functions at different intervals.  This is not a replacement for multi-threading, but it could help someone that wants to do something cheap.  You don't have to use eval().  It is just used as an example.  This is different than running a standard 1 second sleep loop, due to sleeping longer does not consume as much CPU.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// current time<br /></span><span class="keyword">echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">'h:i:s'</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// Some example functions<br /></span><span class="keyword">function </span><span class="default">function_a</span><span class="keyword">() { echo </span><span class="string">'function_a called @ ' </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="string">'h:i:s'</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">; }<br />function </span><span class="default">function_b</span><span class="keyword">() { echo </span><span class="string">'function_b called @ ' </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="string">'h:i:s'</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">; }<br />function </span><span class="default">function_c</span><span class="keyword">() { echo </span><span class="string">'function_c called @ ' </span><span class="keyword">. </span><span class="default">date</span><span class="keyword">(</span><span class="string">'h:i:s'</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">; }<br /><br /></span><span class="comment">// Add some timers (in seconds) with function calls<br /></span><span class="default">$sleeptimers </span><span class="keyword">= array();<br /></span><span class="default">$sleeptimers</span><span class="keyword">[</span><span class="string">'5'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">][</span><span class="string">'func'</span><span class="keyword">] = </span><span class="string">'function_a();'</span><span class="keyword">;<br /></span><span class="default">$sleeptimers</span><span class="keyword">[</span><span class="string">'10'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">][</span><span class="string">'func'</span><span class="keyword">] = </span><span class="string">'function_b();'</span><span class="keyword">;<br /></span><span class="default">$sleeptimers</span><span class="keyword">[</span><span class="string">'15'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">][</span><span class="string">'func'</span><span class="keyword">] = </span><span class="string">'function_c();'</span><span class="keyword">;<br /><br /></span><span class="comment">// Process the timers<br /></span><span class="keyword">while(</span><span class="default">true</span><span class="keyword">) {<br />    </span><span class="default">$currenttime </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$sleeptimers</span><span class="keyword">);<br />    </span><span class="default">$mintime </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$sleeptimers</span><span class="keyword">);<br />    foreach(</span><span class="default">$sleeptimers </span><span class="keyword">as </span><span class="default">$SleepTime </span><span class="keyword">=&gt; </span><span class="default">$Jobs</span><span class="keyword">) {<br />        foreach(</span><span class="default">$Jobs </span><span class="keyword">as </span><span class="default">$JobIndex </span><span class="keyword">=&gt; </span><span class="default">$JobDetail</span><span class="keyword">) {<br />            if(!isset(</span><span class="default">$JobDetail</span><span class="keyword">[</span><span class="string">'lastrun'</span><span class="keyword">])) {<br />                </span><span class="default">$sleeptimers</span><span class="keyword">[</span><span class="default">$SleepTime</span><span class="keyword">][</span><span class="default">$JobIndex</span><span class="keyword">][</span><span class="string">'lastrun'</span><span class="keyword">] = </span><span class="default">time</span><span class="keyword">();<br />                if(</span><span class="default">$SleepTime </span><span class="keyword">&lt; </span><span class="default">$mintime</span><span class="keyword">) </span><span class="default">$mintime </span><span class="keyword">= </span><span class="default">$SleepTime</span><span class="keyword">;<br />            } elseif((</span><span class="default">$currenttime </span><span class="keyword">- </span><span class="default">$JobDetail</span><span class="keyword">[</span><span class="string">'lastrun'</span><span class="keyword">]) &gt;= </span><span class="default">$SleepTime</span><span class="keyword">) {<br />                eval(</span><span class="default">$JobDetail</span><span class="keyword">[</span><span class="string">'func'</span><span class="keyword">]);<br />                </span><span class="default">$lastrun </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">();<br />                </span><span class="default">$sleeptimers</span><span class="keyword">[</span><span class="default">$SleepTime</span><span class="keyword">][</span><span class="default">$JobIndex</span><span class="keyword">][</span><span class="string">'lastrun'</span><span class="keyword">] = </span><span class="default">$lastrun</span><span class="keyword">;<br />                </span><span class="default">$mysleeptime </span><span class="keyword">= </span><span class="default">$SleepTime </span><span class="keyword">- (</span><span class="default">$currenttime </span><span class="keyword">- </span><span class="default">$lastrun</span><span class="keyword">);<br />                if(</span><span class="default">$mysleeptime </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$mysleeptime </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />                if((</span><span class="default">$currenttime </span><span class="keyword">- </span><span class="default">$JobDetail</span><span class="keyword">[</span><span class="string">'lastrun'</span><span class="keyword">]) &lt; </span><span class="default">$mintime</span><span class="keyword">) </span><span class="default">$mintime </span><span class="keyword">= </span><span class="default">$mysleeptime</span><span class="keyword">;  </span><span class="comment">// account for length of time function runs<br />                </span><span class="keyword">echo </span><span class="string">'Sleep time for function ' </span><span class="keyword">. </span><span class="default">$JobDetail</span><span class="keyword">[</span><span class="string">'func'</span><span class="keyword">] . </span><span class="string">' = ' </span><span class="keyword">. </span><span class="default">$mysleeptime </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />            }<br />        }<br />    }<br />    echo </span><span class="string">'Sleeping for ' </span><span class="keyword">. </span><span class="default">$mintime </span><span class="keyword">. </span><span class="string">' seconds' </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    </span><span class="default">sleep</span><span class="keyword">(</span><span class="default">$mintime</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.sleep&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.sleep.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
