<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: posix_setuid - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.posix-setuid.php">
 <link rel="shorturl" href="https://www.php.net/posix-setuid">
 <link rel="alternate" href="https://www.php.net/posix-setuid" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.posix.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.posix-setsid.php">
 <link rel="next" href="https://www.php.net/manual/en/function.posix-strerror.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.posix-setuid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.posix-setuid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.posix-setuid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.posix-setuid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.posix-setuid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.posix-setuid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.posix-setuid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.posix-setuid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.posix-setuid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.posix-setuid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.posix-setuid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the UID of the current process" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: posix_setuid - Manual" />
<meta name="twitter:description" content="Set the UID of the current process" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: posix_setuid - Manual" />
<meta itemprop="description" content="Set the UID of the current process" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the UID of the current process" />

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
        <a href="function.posix-strerror.php">
          posix_strerror &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.posix-setsid.php">
          &laquo; posix_setsid        </a>
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
            <option value='en/function.posix-setuid.php' selected="selected">English</option>
            <option value='de/function.posix-setuid.php'>German</option>
            <option value='es/function.posix-setuid.php'>Spanish</option>
            <option value='fr/function.posix-setuid.php'>French</option>
            <option value='it/function.posix-setuid.php'>Italian</option>
            <option value='ja/function.posix-setuid.php'>Japanese</option>
            <option value='pt_BR/function.posix-setuid.php'>Brazilian Portuguese</option>
            <option value='ru/function.posix-setuid.php'>Russian</option>
            <option value='tr/function.posix-setuid.php'>Turkish</option>
            <option value='uk/function.posix-setuid.php'>Ukrainian</option>
            <option value='zh/function.posix-setuid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.posix-setuid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">posix_setuid</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setuid</span> &mdash; <span class="dc-title">Set the UID of the current process</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.posix-setuid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>posix_setuid</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$user_id</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Set the real user ID of the current process. This is a privileged
   function that needs appropriate privileges (usually root) on
   the system to be able to perform this function.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.posix-setuid-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">user_id</code></dt>
     <dd>
      <p class="para">
       The user id.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.posix-setuid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.posix-setuid-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3595">
    <p><strong>Example #1 <span class="function"><strong>posix_setuid()</strong></span> example</strong></p>
    <div class="example-contents"><p>This example will show the current user id and then set
     it to a different value.</p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">posix_getuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">posix_geteuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br /></span><span style="color: #0000BB">posix_setuid</span><span style="color: #007700">(</span><span style="color: #0000BB">10000</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">posix_getuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10000<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">posix_geteuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10000<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.posix-setuid-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.posix-setgid.php" class="function" rel="rdfs-seeAlso">posix_setgid()</a> - Set the GID of the current process</span></li>
    <li><span class="function"><a href="function.posix-seteuid.php" class="function" rel="rdfs-seeAlso">posix_seteuid()</a> - Set the effective UID of the current process</span></li>
    <li><span class="function"><a href="function.posix-getuid.php" class="function" rel="rdfs-seeAlso">posix_getuid()</a> - Return the real user ID of the current process</span></li>
    <li><span class="function"><a href="function.posix-geteuid.php" class="function" rel="rdfs-seeAlso">posix_geteuid()</a> - Return the effective user ID of the current process</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/posix/functions/posix-setuid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.posix-setuid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.posix-setuid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-setuid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115069">  <div class="votes">
    <div id="Vu115069">
    <a href="/manual/vote-note.php?id=115069&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115069">
    <a href="/manual/vote-note.php?id=115069&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115069" title="100% like this...">
    3
    </div>
  </div>
  <a href="#115069" class="name">
  <strong class="user"><em>Leigh</em></strong></a><a class="genanchor" href="#115069"> &para;</a><div class="date" title="2014-05-22 02:08"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115069">
<div class="phpcode"><code><span class="html">Note that on unix, if your target user does not have a valid shell, some php functions (eg: tempnam) will not work correctly:<br /><br />$ grep www-data /etc/passwd<br />www-data:x:33:33:www-data:/var/www:/usr/sbin/nologin<br /><br />$ cat test.php <br />#!/usr/bin/php -q<br /><span class="default">&lt;?php<br />    $info</span><span class="keyword">=</span><span class="default">posix_getpwnam</span><span class="keyword">(</span><span class="string">"www-data"</span><span class="keyword">);<br />    </span><span class="default">$id</span><span class="keyword">=</span><span class="default">$info</span><span class="keyword">[</span><span class="string">"uid"</span><span class="keyword">];<br /><br />    </span><span class="default">$file</span><span class="keyword">=</span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">"/tmp"</span><span class="keyword">,</span><span class="string">"something"</span><span class="keyword">);<br />    print </span><span class="string">"PRE SetUID: </span><span class="default">$file</span><span class="string">\n"</span><span class="keyword">;<br /><br />    </span><span class="default">$SETUID</span><span class="keyword">=</span><span class="default">posix_setuid</span><span class="keyword">(</span><span class="default">$id</span><span class="keyword">);<br /><br />    </span><span class="default">$file</span><span class="keyword">=</span><span class="default">tempnam</span><span class="keyword">(</span><span class="string">"/tmp"</span><span class="keyword">,</span><span class="string">"something"</span><span class="keyword">);<br />    print </span><span class="string">"POST SetUID: </span><span class="default">$file</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />$ sudo ./test.php <br />PRE SetUID: /tmp/somethingrsb1qZ<br />POST SetUID:</span></code></div>
  </div>
 </div>
  <div class="note" id="73113">  <div class="votes">
    <div id="Vu73113">
    <a href="/manual/vote-note.php?id=73113&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73113">
    <a href="/manual/vote-note.php?id=73113&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73113" title="66% like this...">
    1
    </div>
  </div>
  <a href="#73113" class="name">
  <strong class="user"><em>TheWanderer</em></strong></a><a class="genanchor" href="#73113"> &para;</a><div class="date" title="2007-02-09 04:16"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73113">
<div class="phpcode"><code><span class="html">On many UNIX systems (tested on Debian GNU/Linux), SUID is disabled for scripts and works only for binaries. If you need to setuid, you must use a wrapper binary that runs setuid() php script. Here's an example:<br /><br />$ nano suexec.cpp<br />#include &lt;stdlib&gt;<br />using namespace std;<br />int main()<br />{<br />system("php /home/php/php_user.php");<br />return 0;<br />}<br /><br />$ g++ -o suexec suexec.cpp<br />$ sudo chown root:root suexec<br />$ sudo chmod 4755 root<br /><br />Then we create short PHP script to set process uid (you should already know how to do this). Don't even try to experiment with auto_prepend_file in php.ini, it doesn't work as expected.</span></code></div>
  </div>
 </div>
  <div class="note" id="78554">  <div class="votes">
    <div id="Vu78554">
    <a href="/manual/vote-note.php?id=78554&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78554">
    <a href="/manual/vote-note.php?id=78554&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78554" title="100% like this...">
    1
    </div>
  </div>
  <a href="#78554" class="name">
  <strong class="user"><em>fm at farhad.ca</em></strong></a><a class="genanchor" href="#78554"> &para;</a><div class="date" title="2007-10-17 03:44"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78554">
<div class="phpcode"><code><span class="html">When you do a posix_setuid from root to some other users you will not have access to files owned by root according to their permissions. For instance if you change owner of the process and still need to open a file for read or write with 600 permission owned by root you will receive a permission denied.<br />There are some ways to do this (i.e. a unix socket or tcp daemon etc), but probably the most easiest way is:<br /><br />Open the file before changing ownership of process, save the file pointer in a global variable and use it after changing ownership. <br /><br />For example assume /root/test_file is a file owned by root:root and have a permission of 600 and you are running this script under root. This code will not work:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Change ownership of process to nobody<br /></span><span class="default">posix_setgid</span><span class="keyword">(</span><span class="default">99</span><span class="keyword">);<br /></span><span class="default">posix_setuid</span><span class="keyword">(</span><span class="default">99</span><span class="keyword">);<br /><br /></span><span class="default">$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/root/test_file'</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">);<br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">,</span><span class="string">"some test strings"</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />But this one will work:<br /><br /><span class="default">&lt;?php<br />$fd </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'/root/test_file'</span><span class="keyword">,</span><span class="string">'a'</span><span class="keyword">);<br /><br /></span><span class="comment">// Change ownership of process to nobody<br /></span><span class="default">posix_setgid</span><span class="keyword">(</span><span class="default">99</span><span class="keyword">);<br /></span><span class="default">posix_setuid</span><span class="keyword">(</span><span class="default">99</span><span class="keyword">);<br /><br /></span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$fd</span><span class="keyword">,</span><span class="string">"some test strings"</span><span class="keyword">);<br /></span><span class="default">fclose</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />Hope this helps some one.<br /><br />[Tested on CentOS 5 - Linux 2.6.x - PHP 5.2.x]</span></code></div>
  </div>
 </div>
  <div class="note" id="74747">  <div class="votes">
    <div id="Vu74747">
    <a href="/manual/vote-note.php?id=74747&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74747">
    <a href="/manual/vote-note.php?id=74747&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74747" title="100% like this...">
    1
    </div>
  </div>
  <a href="#74747" class="name">
  <strong class="user"><em>reuben @ nospam me</em></strong></a><a class="genanchor" href="#74747"> &para;</a><div class="date" title="2007-04-25 06:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74747">
<div class="phpcode"><code><span class="html">In response to a note above that advocated the user of system() in a setuid program written in C, this is generally a bad idea for security.  <br /><br />You should use the standard library calls like execl() instead because system() can be manipulated to execute the wrong thing using the SHELL, IFS and possibly other variables.</span></code></div>
  </div>
 </div>
  <div class="note" id="68493">  <div class="votes">
    <div id="Vu68493">
    <a href="/manual/vote-note.php?id=68493&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68493">
    <a href="/manual/vote-note.php?id=68493&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68493" title="no votes...">
    0
    </div>
  </div>
  <a href="#68493" class="name">
  <strong class="user"><em>hpaul/at/abo/dot/fi</em></strong></a><a class="genanchor" href="#68493"> &para;</a><div class="date" title="2006-07-29 11:56"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68493">
<div class="phpcode"><code><span class="html">It seems like this function returns true if you try to change uid to the already active user - even if you aren't root.<br /><br />Should save you one if-statement in some cases.</span></code></div>
  </div>
 </div>
  <div class="note" id="23983">  <div class="votes">
    <div id="Vu23983">
    <a href="/manual/vote-note.php?id=23983&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23983">
    <a href="/manual/vote-note.php?id=23983&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23983" title="no votes...">
    0
    </div>
  </div>
  <a href="#23983" class="name">
  <strong class="user"><em>simon at dont-spam-me-pleease dot simonster dot com</em></strong></a><a class="genanchor" href="#23983"> &para;</a><div class="date" title="2002-08-02 03:53"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23983">
<div class="phpcode"><code><span class="html">Here's some Perl code to run a PHP script setuid. Just put it into a CGI, make that CGI setuid and executable, then call the CGI where you would usually call the PHP script.<br /><br />#!/usr/local/bin/perl<br /><br /># Perl wrapper to execute a PHP script setuid<br /># ?2002 Simon Kornblith<br /># Requires PHP CGI<br /><br /># Make UID = EUID (so that PHP can run system()s and execs() setuid)<br />$&lt; = $&gt;;<br /># Set this to the path, so that we can't get poisoned<br />$ENV{'PATH'} = "/home/httpd/cgi-bin/ssl/admin";      <br /># Open the PHP script (must start with !#/usr/local/bin/php or similar and<br /># be executable<br />open(STDOUT, "| /home/httpd/cgi-bin/ssl/admin/new.php");<br /># Write STDIN to PHP script <br />print while &lt;STDIN&gt;;</span></code></div>
  </div>
 </div>
  <div class="note" id="37289">  <div class="votes">
    <div id="Vu37289">
    <a href="/manual/vote-note.php?id=37289&amp;page=function.posix-setuid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd37289">
    <a href="/manual/vote-note.php?id=37289&amp;page=function.posix-setuid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V37289" title="0% like this...">
    -2
    </div>
  </div>
  <a href="#37289" class="name">
  <strong class="user"><em>rjmooney at syr dot edu</em></strong></a><a class="genanchor" href="#37289"> &para;</a><div class="date" title="2003-11-09 03:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom37289">
<div class="phpcode"><code><span class="html">For simple operations, you can easily create a privilege-separation mechanism to perform commands that require elevated privileges.<br /><br />For example, in creating a document repository, I had the need to provide access to certain directory and file operations based on a user's login name.  It's unrealistic and unsecure to provide the web server access to all of the directories that the user may need to access, so I created a setuid() script to perform the required operations for me.<br /><br />An exerpt from the code demonstrates this:<br /><br />&lt;?<br /><br />//<br />// main.php<br />//<br /><br />// Perform a privileged stat()<br />function privsep_stat($path)<br />{<br />        // Call the privilege separation program, ask for a stat of the specified path<br />        $serialized_result = exec("/path/to/privsep.php stat " . $path, $oa, $return_code);<br />        if ($return_code != 0)<br />        {<br />                return false;<br />        }<br /><br />        // Return the unserialized object<br />        return unserialize($serialized_result);<br />}<br /><br />// Get file statistics on a file we don't have access to as the web server user<br />$st = privsep_stat("/private_directory/private_file");<br />print_r($st);<br /><br />?&gt;<br /><br />privsep.php looks like this:<br /><br />#!/usr/local/bin/php<br />&lt;?<br /><br />//<br />// privsep.php<br />//<br /><br />// Don't allow this script to be run from the web<br />if (isset($_SERVER['REQUEST_METHOD']))<br />{<br />    print "&lt;br&gt;This program is not intended to be run directly from the WWW.\n";<br />    return 1;<br />}<br /><br />// TODO: add your argument validation here<br /><br />// A stat was requested<br />if ($argv[1] == "stat")<br />{<br />    // Reset the stat() cache<br />    clearstatcache();<br /><br />    // Original user ID<br />    $original_uid = posix_get_uid();<br /><br />    // Set our real user ID to root<br />    $success = posix_setuid(0);<br />    if (!$success)<br />    {<br />        print "Error: Cannot setuid().\n";<br />        return 1;<br />    }<br /><br />    // Store the file statistics<br />    $st = stat($argv[2]);<br /><br />    // Drop the real UID back to the calling user ID<br />    $success = posix_setuid($original_uid); <br />    if (!$success)<br />    {<br />        print "Error: Cannot setuid().\n";<br />        return 1;<br />    }<br /><br />    // Drop the effective UID as well<br />    $success = posix_seteuid($original_uid); <br />    if (!$success)<br />    {<br />        print "Error: Cannot seteuid().\n";<br />        return 1;<br />    }<br /><br />    // Serialize the result and print it<br />    $result = serialize($st);<br />    print $result;<br /><br />    // Success!<br />    return 0;<br />}<br />?&gt;<br /><br />Finally, privsep.php's permissions are configured like this:<br /><br /># chown root:wheel privsep.php<br /># chmod 4755 privsep.php<br /><br />And look like this:<br /><br />-rwsr-xr-x  1 root      wheel     1000 Nov  1 00:00 privsep.php<br /><br />It's probably wise to keep privsep.php out of your document root to help mitigate any successful attack. <br /><br />This method can be extended for other functions.  Use at your own risk.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.posix-setuid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.posix-setuid.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.posix-setuid.php" title="posix_&#8203;setuid">posix_&#8203;setuid</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-strerror.php" title="posix_&#8203;strerror">posix_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.posix-sysconf.php" title="posix_&#8203;sysconf">posix_&#8203;sysconf</a>
                        </li>
                                                <li class="">
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
