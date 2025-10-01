<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: array_shift - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.array-shift.php">
 <link rel="shorturl" href="https://www.php.net/array-shift">
 <link rel="alternate" href="https://www.php.net/array-shift" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.array.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.array-search.php">
 <link rel="next" href="https://www.php.net/manual/en/function.array-slice.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.array-shift.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.array-shift.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.array-shift.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.array-shift.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.array-shift.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.array-shift.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.array-shift.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.array-shift.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.array-shift.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.array-shift.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.array-shift.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Shift an element off the beginning of array" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: array_shift - Manual" />
<meta name="twitter:description" content="Shift an element off the beginning of array" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: array_shift - Manual" />
<meta itemprop="description" content="Shift an element off the beginning of array" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Shift an element off the beginning of array" />

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
        <a href="function.array-slice.php">
          array_slice &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.array-search.php">
          &laquo; array_search        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.array.php'>Arrays</a></li>      <li><a href='ref.array.php'>Array Functions</a></li>      </ul>
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
            <option value='en/function.array-shift.php' selected="selected">English</option>
            <option value='de/function.array-shift.php'>German</option>
            <option value='es/function.array-shift.php'>Spanish</option>
            <option value='fr/function.array-shift.php'>French</option>
            <option value='it/function.array-shift.php'>Italian</option>
            <option value='ja/function.array-shift.php'>Japanese</option>
            <option value='pt_BR/function.array-shift.php'>Brazilian Portuguese</option>
            <option value='ru/function.array-shift.php'>Russian</option>
            <option value='tr/function.array-shift.php'>Turkish</option>
            <option value='uk/function.array-shift.php'>Ukrainian</option>
            <option value='zh/function.array-shift.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.array-shift" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">array_shift</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">array_shift</span> &mdash; <span class="dc-title">Shift an element off the beginning of array</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.array-shift-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>array_shift</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter reference">&$array</code></span>): <span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>array_shift()</strong></span> shifts the first value of the
   <code class="parameter">array</code> off and returns it, shortening the
   <code class="parameter">array</code> by one element and moving everything
   down. All numerical array keys will be modified to start counting from zero
   while literal keys won&#039;t be affected.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function will
<span class="function"><a href="function.reset.php" class="function">reset()</a></span> the <span class="type"><a href="language.types.array.php" class="type array">array</a></span> pointer of the input array after
use.</span></p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.array-shift-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">array</code></dt>
     <dd>
      <p class="para">
       The input array.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.array-shift-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the shifted value, or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if <code class="parameter">array</code> is
   empty or is not an array.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.array-shift-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5272">
    <p><strong>Example #1 <span class="function"><strong>array_shift()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stack </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"orange"</span><span style="color: #007700">, </span><span style="color: #DD0000">"banana"</span><span style="color: #007700">, </span><span style="color: #DD0000">"apple"</span><span style="color: #007700">, </span><span style="color: #DD0000">"raspberry"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$fruit </span><span style="color: #007700">= </span><span style="color: #0000BB">array_shift</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$stack</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Array
(
    [0] =&gt; banana
    [1] =&gt; apple
    [2] =&gt; raspberry
)</pre>
</div>
    </div>
    <div class="example-contents"><p>
     and <code class="literal">orange</code> will be assigned to
     <var class="varname">$fruit</var>.
    </p></div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.array-shift-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.array-unshift.php" class="function" rel="rdfs-seeAlso">array_unshift()</a> - Prepend one or more elements to the beginning of an array</span></li>
    <li><span class="function"><a href="function.array-push.php" class="function" rel="rdfs-seeAlso">array_push()</a> - Push one or more elements onto the end of array</span></li>
    <li><span class="function"><a href="function.array-pop.php" class="function" rel="rdfs-seeAlso">array_pop()</a> - Pop the element off the end of array</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/array/functions/array-shift.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.array-shift%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.array-shift&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-shift.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">29 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="86783">  <div class="votes">
    <div id="Vu86783">
    <a href="/manual/vote-note.php?id=86783&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86783">
    <a href="/manual/vote-note.php?id=86783&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86783" title="76% like this...">
    115
    </div>
  </div>
  <a href="#86783" class="name">
  <strong class="user"><em>regs at voidship dot net</em></strong></a><a class="genanchor" href="#86783"> &para;</a><div class="date" title="2008-11-03 12:50"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86783">
<div class="phpcode"><code><span class="html">Using array_shift over larger array was fairly slow.  It sped up as the array shrank, most likely as it has to reindex a smaller data set.<br /><br />For my purpose, I used array_reverse, then array_pop, which doesn't need to reindex the array and will preserve keys if you want it to (didn't matter in my case).  <br /><br />Using direct index references, i.e., array_test[$i], was fast, but direct index referencing + unset for destructive operations was about the same speed as array_reverse and array_pop.  It also requires sequential numeric keys.</span></code></div>
  </div>
 </div>
  <div class="note" id="112947">  <div class="votes">
    <div id="Vu112947">
    <a href="/manual/vote-note.php?id=112947&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112947">
    <a href="/manual/vote-note.php?id=112947&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112947" title="75% like this...">
    64
    </div>
  </div>
  <a href="#112947" class="name">
  <strong class="user"><em>elad dot yosifon at gmail dot com</em></strong></a><a class="genanchor" href="#112947"> &para;</a><div class="date" title="2013-08-10 06:47"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112947">
<div class="phpcode"><code><span class="html">Notice:<br />the complexity of array_pop() is O(1). <br />the complexity of array_shift() is O(n).<br />array_shift() requires a re-index process on the array, so it has to run over all the elements and index them.</span></code></div>
  </div>
 </div>
  <div class="note" id="124695">  <div class="votes">
    <div id="Vu124695">
    <a href="/manual/vote-note.php?id=124695&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124695">
    <a href="/manual/vote-note.php?id=124695&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124695" title="75% like this...">
    2
    </div>
  </div>
  <a href="#124695" class="name">
  <strong class="user"><em>hmztsc at gmail dot com</em></strong></a><a class="genanchor" href="#124695"> &para;</a><div class="date" title="2020-02-07 07:58"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124695">
<div class="phpcode"><code><span class="html">// i wanted to remove first array inside to array<br />// but doesn't work for me : array_shift();<br /><br />$cargo_file = <br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; Country<br />            [1] =&gt; CountryCode<br />            [2] =&gt; City<br />            [3] =&gt; CityOtherLanguage<br />            [4] =&gt; PostCode<br />            [5] =&gt; Days<br />        )<br /><br />    [1] =&gt; Array<br />        (<br />            [0] =&gt; Turkey<br />            [1] =&gt; TR<br />            [2] =&gt; Istanbul<br />            [3] =&gt; Istanbul<br />            [4] =&gt; 34930<br />            [5] =&gt; 9<br />        )<br /><br />)<br /><br />$cargo_file = array_shift($cargo_file);<br /><br />echo "&lt;pre&gt;";<br />print_r($cargo_file);<br />echo "&lt;/pre&gt;";<br /><br />// result after :<br /><br />/*<br />Array<br />(<br />    [0] =&gt; Country<br />    [1] =&gt; CountryCode<br />    [2] =&gt; City<br />    [3] =&gt; CityOtherLanguage<br />    [4] =&gt; PostCode<br />    [5] =&gt; Days<br />)<br />*/<br /><br />i developed a solution<br /><br />function removeFirstArray($array){<br /><br />    $new_array = [];<br />    foreach ($array as $key =&gt; $value) {<br />        if($key &gt; 0){<br />            $new_array[] = $value;<br />        }   <br />    }<br /><br />    return $new_array;<br />}<br /><br />$cargo_file= removeFirstArray($cargo_file);<br /><br />echo "&lt;pre&gt;";<br />print_r($cargo_file);<br />echo "&lt;/pre&gt;";<br /><br />Array<br />(<br />    [0] =&gt; Array<br />        (<br />            [0] =&gt; Turkey<br />            [1] =&gt; TR<br />            [2] =&gt; Istanbul<br />            [3] =&gt; Istanbul<br />            [4] =&gt; 34930<br />            [5] =&gt; 9<br />        )<br /><br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="84179">  <div class="votes">
    <div id="Vu84179">
    <a href="/manual/vote-note.php?id=84179&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd84179">
    <a href="/manual/vote-note.php?id=84179&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V84179" title="66% like this...">
    24
    </div>
  </div>
  <a href="#84179" class="name">
  <strong class="user"><em>nospam at dyce dot losethisbit dot com</em></strong></a><a class="genanchor" href="#84179"> &para;</a><div class="date" title="2008-07-02 05:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom84179">
<div class="phpcode"><code><span class="html">Just a useful version which returns a simple array with the first key and value. Porbably a better way of doing it, but it works for me ;-)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_kshift</span><span class="keyword">(&amp;</span><span class="default">$arr</span><span class="keyword">)<br />{<br />  list(</span><span class="default">$k</span><span class="keyword">) = </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />  </span><span class="default">$r  </span><span class="keyword">= array(</span><span class="default">$k</span><span class="keyword">=&gt;</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />  unset(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />  return </span><span class="default">$r</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// test it on a simple associative array<br /></span><span class="default">$arr </span><span class="keyword">= array(</span><span class="string">'x'</span><span class="keyword">=&gt;</span><span class="string">'ball'</span><span class="keyword">,</span><span class="string">'y'</span><span class="keyword">=&gt;</span><span class="string">'hat'</span><span class="keyword">,</span><span class="string">'z'</span><span class="keyword">=&gt;</span><span class="string">'apple'</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">array_kshift</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">));<br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br />Array<br />(<br />    [x] =&gt; ball<br />    [y] =&gt; hat<br />    [z] =&gt; apple<br />)<br />Array<br />(<br />    [x] =&gt; ball<br />)<br />Array<br />(<br />    [y] =&gt; hat<br />    [z] =&gt; apple<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="122277">  <div class="votes">
    <div id="Vu122277">
    <a href="/manual/vote-note.php?id=122277&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122277">
    <a href="/manual/vote-note.php?id=122277&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122277" title="66% like this...">
    7
    </div>
  </div>
  <a href="#122277" class="name">
  <strong class="user"><em>biziclop at vipmail dot hu</em></strong></a><a class="genanchor" href="#122277"> &para;</a><div class="date" title="2018-01-17 10:49"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122277">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//Be careful when using array_pop/shift/push/unshift with irregularly indexed arrays:<br /><br /></span><span class="default">$shifty </span><span class="keyword">= </span><span class="default">$poppy </span><span class="keyword">= array(<br />  </span><span class="default">2 </span><span class="keyword">=&gt; </span><span class="string">'(2)'</span><span class="keyword">,<br />  </span><span class="default">1 </span><span class="keyword">=&gt; </span><span class="string">'(1)'</span><span class="keyword">,<br />  </span><span class="default">0 </span><span class="keyword">=&gt; </span><span class="string">'(0)'</span><span class="keyword">,<br />);                         </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);<br /><br /></span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);    </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);<br /></span><span class="comment">//     [0] =&gt; (1)<br />//     [1] =&gt; (0)<br /><br /></span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$poppy </span><span class="keyword">);       </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$poppy </span><span class="keyword">);<br /></span><span class="comment">//     [2] =&gt; (2)<br />//     [1] =&gt; (1)<br /><br /></span><span class="default">$shifty </span><span class="keyword">= </span><span class="default">$poppy </span><span class="keyword">= array(<br />  </span><span class="string">'a' </span><span class="keyword">=&gt; </span><span class="string">'A'</span><span class="keyword">,<br />  </span><span class="string">'b' </span><span class="keyword">=&gt; </span><span class="string">'B'</span><span class="keyword">,<br />  </span><span class="string">'(0)'</span><span class="keyword">,<br />  </span><span class="string">'(1)'</span><span class="keyword">,<br />  </span><span class="string">'c' </span><span class="keyword">=&gt; </span><span class="string">'C'</span><span class="keyword">,<br />  </span><span class="string">'d' </span><span class="keyword">=&gt; </span><span class="string">'D'</span><span class="keyword">,<br />);                                     </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);<br /><br /></span><span class="default">array_shift</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);                </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);<br /></span><span class="comment">//     [b] =&gt; B<br />//     [0] =&gt; (0)<br />//     [1] =&gt; (1)<br />//     [c] =&gt; C<br />//     [d] =&gt; D<br /><br /></span><span class="default">array_unshift</span><span class="keyword">( </span><span class="default">$shifty</span><span class="keyword">, </span><span class="string">'unshifted'</span><span class="keyword">);  </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$shifty </span><span class="keyword">);<br /></span><span class="comment">//     [0] =&gt; unshifted<br />//     [b] =&gt; B<br />//     [1] =&gt; (0)<br />//     [2] =&gt; (1)<br />//     [c] =&gt; C<br />//     [d] =&gt; D<br /><br /></span><span class="default">array_pop</span><span class="keyword">( </span><span class="default">$poppy </span><span class="keyword">);                   </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$poppy </span><span class="keyword">);<br /></span><span class="comment">//     [a] =&gt; A<br />//     [b] =&gt; B<br />//     [0] =&gt; (0)<br />//     [1] =&gt; (1)<br />//     [c] =&gt; C<br /><br /></span><span class="default">array_push</span><span class="keyword">( </span><span class="default">$poppy</span><span class="keyword">, </span><span class="string">'pushed'</span><span class="keyword">);         </span><span class="default">print_r</span><span class="keyword">( </span><span class="default">$poppy </span><span class="keyword">);<br /></span><span class="comment">//     [a] =&gt; A<br />//     [b] =&gt; B<br />//     [0] =&gt; (0)<br />//     [1] =&gt; (1)<br />//     [c] =&gt; C<br />//     [2] =&gt; pushed<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="86148">  <div class="votes">
    <div id="Vu86148">
    <a href="/manual/vote-note.php?id=86148&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86148">
    <a href="/manual/vote-note.php?id=86148&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86148" title="66% like this...">
    5
    </div>
  </div>
  <a href="#86148" class="name">
  <strong class="user"><em>chris {at} w3style {dot} co {dot} uk</em></strong></a><a class="genanchor" href="#86148"> &para;</a><div class="date" title="2008-10-05 06:06"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86148">
<div class="phpcode"><code><span class="html">As pointed out earlier, in PHP4, array_shift() modifies the input array by-reference, but it doesn't return the first element by reference.  This may seem like very unexpected behaviour.  If you're working with a collection of references (in my case XML Nodes) this should do the trick.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * This function exhibits the same behaviour is array_shift(), except<br /> * it returns a reference to the first element of the array instead of a copy.<br /> *<br /> * @param array &amp;$array<br /> * @return mixed<br /> */<br /></span><span class="keyword">function &amp;</span><span class="default">array_shift_reference</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">)<br />{<br />  if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">)<br />  {<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$first </span><span class="keyword">=&amp; </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />  }<br />  else<br />  {<br />    </span><span class="default">$first </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  }<br />  </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />  return </span><span class="default">$first</span><span class="keyword">;<br />}<br /><br />class </span><span class="default">ArrayShiftReferenceTest </span><span class="keyword">extends </span><span class="default">UnitTestCase<br /></span><span class="keyword">{<br />    <br />  function </span><span class="default">testFunctionRemovesFirstElementOfNumericallyIndexedArray</span><span class="keyword">()<br />  {<br />    </span><span class="default">$input </span><span class="keyword">= array(</span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br />    </span><span class="default">array_shift_reference</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertEqual</span><span class="keyword">(array(</span><span class="string">'bar'</span><span class="keyword">), </span><span class="default">$input</span><span class="keyword">, </span><span class="string">'%s: The array should be shifted one element left'</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">testFunctionRemovesFirstElementOfAssociativeArray</span><span class="keyword">()<br />  {<br />    </span><span class="default">$input </span><span class="keyword">= array(</span><span class="string">'x' </span><span class="keyword">=&gt; </span><span class="string">'foo'</span><span class="keyword">, </span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">);<br />    </span><span class="default">array_shift_reference</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertEqual</span><span class="keyword">(array(</span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">), </span><span class="default">$input</span><span class="keyword">, </span><span class="string">'%s: The array should be shifted one element left'</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">testFunctionReturnsReferenceToFirstElementOfNumericallyIndexedArray</span><span class="keyword">()<br />  {<br />    </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br />    </span><span class="default">$input </span><span class="keyword">= array(&amp;</span><span class="default">$foo</span><span class="keyword">, </span><span class="string">'bar'</span><span class="keyword">);<br />    </span><span class="default">$first </span><span class="keyword">=&amp; </span><span class="default">array_shift_reference</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertReference</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">, </span><span class="string">'%s: The return value should reference the first array element'</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">testFunctionReturnsReferenceToFirstElementOfAssociativeArray</span><span class="keyword">()<br />  {<br />    </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'foo'</span><span class="keyword">;<br />    </span><span class="default">$input </span><span class="keyword">= array(</span><span class="string">'x' </span><span class="keyword">=&gt; &amp;</span><span class="default">$foo</span><span class="keyword">, </span><span class="string">'y' </span><span class="keyword">=&gt; </span><span class="string">'bar'</span><span class="keyword">);<br />    </span><span class="default">$first </span><span class="keyword">=&amp; </span><span class="default">array_shift_reference</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertReference</span><span class="keyword">(</span><span class="default">$foo</span><span class="keyword">, </span><span class="default">$first</span><span class="keyword">, </span><span class="string">'%s: The return value should reference the first array element'</span><span class="keyword">);<br />  }<br /><br />  function </span><span class="default">testFunctionReturnsNullIfEmptyArrayPassedAsInput</span><span class="keyword">()<br />  {<br />    </span><span class="default">$input </span><span class="keyword">= array();<br />    </span><span class="default">$first </span><span class="keyword">= </span><span class="default">array_shift_reference</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">);<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">assertNull</span><span class="keyword">(</span><span class="default">$first</span><span class="keyword">, </span><span class="string">'%s: Array has no first element so NULL should be returned'</span><span class="keyword">);<br />  }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115025">  <div class="votes">
    <div id="Vu115025">
    <a href="/manual/vote-note.php?id=115025&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115025">
    <a href="/manual/vote-note.php?id=115025&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115025" title="64% like this...">
    4
    </div>
  </div>
  <a href="#115025" class="name">
  <strong class="user"><em>michaeljanikk at gmail dot com</em></strong></a><a class="genanchor" href="#115025"> &para;</a><div class="date" title="2014-05-14 01:26"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115025">
<div class="phpcode"><code><span class="html">To remove an element from the MIDDLE of an array (similar to array_shift, only instead of removing the first element, we want to remove an element in the middle, and shift all keys that follow down one position)<br /><br />Note that this only works on enumerated arrays.<br /><br /><span class="default">&lt;?php<br />$array </span><span class="keyword">= array(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'b'</span><span class="keyword">, </span><span class="string">'c'</span><span class="keyword">, </span><span class="string">'d'</span><span class="keyword">, </span><span class="string">'e'</span><span class="keyword">, </span><span class="string">'e'</span><span class="keyword">);<br /></span><span class="comment">/*<br />array(6) {<br />  [0]=&gt;<br />  string(1) "a"<br />  [1]=&gt;<br />  string(1) "b"<br />  [2]=&gt;<br />  string(1) "c"<br />  [3]=&gt;<br />  string(1) "d"<br />  [4]=&gt;<br />  string(1) "e"<br />  [5]=&gt;<br />  string(1) "e"<br />}<br />*/<br /><br /></span><span class="default">$indexToRemove </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$indexToRemove</span><span class="keyword">]);<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">array_slice</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />array(5) {<br />  [0]=&gt;<br />  string(1) "a"<br />  [1]=&gt;<br />  string(1) "b"<br />  [2]=&gt;<br />  string(1) "d"<br />  [3]=&gt;<br />  string(1) "e"<br />  [4]=&gt;<br />  string(1) "e"<br />}<br />*/<br /></span><span class="default">?&gt;<br /></span><br />I hope this helps someone!</span></code></div>
  </div>
 </div>
  <div class="note" id="118956">  <div class="votes">
    <div id="Vu118956">
    <a href="/manual/vote-note.php?id=118956&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118956">
    <a href="/manual/vote-note.php?id=118956&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118956" title="57% like this...">
    2
    </div>
  </div>
  <a href="#118956" class="name">
  <strong class="user"><em>mah dot di at live dot com</em></strong></a><a class="genanchor" href="#118956"> &para;</a><div class="date" title="2016-03-07 02:35"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118956">
<div class="phpcode"><code><span class="html">This removeAdd function, the first argument shift your array then unshif the second argument to your array. first argument is an array and second argument can be int or str.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">removeAdd </span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$newer</span><span class="keyword">){<br />    </span><span class="default">$a </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="default">$b </span><span class="keyword">= </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">$newer</span><span class="keyword">);<br />    foreach (</span><span class="default">$arr </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">){<br />        echo </span><span class="default">$value</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$a </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">);<br />foreach (</span><span class="default">$a </span><span class="keyword">as </span><span class="default">$current</span><span class="keyword">){<br />    echo </span><span class="default">$current</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />}<br />echo </span><span class="string">"&lt;hr /&gt;"</span><span class="keyword">;<br /></span><span class="default">removeAdd</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />OUTPUT:<br />1<br />2<br />3<br />4<br />5<br />6<br />_______<br /><br />0<br />2<br />3<br />4<br />5<br />6</span></code></div>
  </div>
 </div>
  <div class="note" id="76292">  <div class="votes">
    <div id="Vu76292">
    <a href="/manual/vote-note.php?id=76292&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76292">
    <a href="/manual/vote-note.php?id=76292&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76292" title="57% like this...">
    5
    </div>
  </div>
  <a href="#76292" class="name">
  <strong class="user"><em>Traps</em></strong></a><a class="genanchor" href="#76292"> &para;</a><div class="date" title="2007-07-09 10:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76292">
<div class="phpcode"><code><span class="html">For those that may be trying to use array_shift() with an array containing references (e.g. working with linked node trees), beware that array_shift() may not work as you expect: it will return a *copy* of the first element of the array, and not the element itself, so your reference will be lost.<br /><br />The solution is to reference the first element before removing it with array_shift():<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// using only array_shift:<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$array </span><span class="keyword">= array(&amp;</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />echo </span><span class="string">"a = </span><span class="default">$a</span><span class="string">, b = </span><span class="default">$b</span><span class="string">&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">// outputs a = 1, b = 2<br /><br />// solution: referencing the first element first:<br /></span><span class="default">$a </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br /></span><span class="default">$array </span><span class="keyword">= array(&amp;</span><span class="default">$a</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">=&amp; </span><span class="default">$array</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br /></span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />echo </span><span class="string">"a = </span><span class="default">$a</span><span class="string">, b = </span><span class="default">$b</span><span class="string">&lt;br&gt;"</span><span class="keyword">; </span><span class="comment">// outputs a = 2, b = 2<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52064">  <div class="votes">
    <div id="Vu52064">
    <a href="/manual/vote-note.php?id=52064&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52064">
    <a href="/manual/vote-note.php?id=52064&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52064" title="57% like this...">
    5
    </div>
  </div>
  <a href="#52064" class="name">
  <strong class="user"><em>arturo {dot} ronchi {at} gmail {dot} com</em></strong></a><a class="genanchor" href="#52064"> &para;</a><div class="date" title="2005-04-20 06:24"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52064">
<div class="phpcode"><code><span class="html">Here is a little function if you would like to get the top element and rotate the array afterwards.<br /><br />function array_rotate(&amp;$arr)<br />{<br />  $elm = array_shift($arr);<br />  array_push($arr, $elm);<br />  return $elm;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="49817">  <div class="votes">
    <div id="Vu49817">
    <a href="/manual/vote-note.php?id=49817&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd49817">
    <a href="/manual/vote-note.php?id=49817&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V49817" title="57% like this...">
    3
    </div>
  </div>
  <a href="#49817" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#49817"> &para;</a><div class="date" title="2005-02-09 04:27"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom49817">
<div class="phpcode"><code><span class="html">This function will save the key values of an array, and it will work in lower versions of PHP:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">array_shift2</span><span class="keyword">(&amp;</span><span class="default">$array</span><span class="keyword">){<br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    </span><span class="default">$removed </span><span class="keyword">= </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    unset(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />    return </span><span class="default">$removed</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93084">  <div class="votes">
    <div id="Vu93084">
    <a href="/manual/vote-note.php?id=93084&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93084">
    <a href="/manual/vote-note.php?id=93084&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93084" title="52% like this...">
    1
    </div>
  </div>
  <a href="#93084" class="name">
  <strong class="user"><em>patrick at pwfisher dot com</em></strong></a><a class="genanchor" href="#93084"> &para;</a><div class="date" title="2009-08-21 08:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93084">
<div class="phpcode"><code><span class="html">Here's a utility function to parse command line arguments.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * CommandLine class<br /> *<br /> * @package             Framework<br /> */<br />/**<br /> * Command Line Interface (CLI) utility class.<br /> *<br /> * @author              Patrick Fisher &lt;patrick@pwfisher.com&gt;<br /> * @since               August 21, 2009<br /> * @package             Framework<br /> * @subpackage          Env<br /> */<br /></span><span class="keyword">class </span><span class="default">CommandLine </span><span class="keyword">{<br /><br />    </span><span class="comment">/**<br />     * PARSE ARGUMENTS<br />     * <br />     * [pfisher ~]$ echo "&lt;?php<br />     * &gt;     include('CommandLine.php');<br />     * &gt;     \$args = CommandLine::parseArgs(\$_SERVER['argv']);<br />     * &gt;     echo "\n", '\$out = '; var_dump(\$args); echo "\n";<br />     * &gt; ?&gt;" &gt; test.php<br />     * <br />     * [pfisher ~]$ php test.php plain-arg --foo --bar=baz --funny="spam=eggs" --alsofunny=spam=eggs \<br />     * &gt; 'plain arg 2' -abc -k=value "plain arg 3" --s="original" --s='overwrite' --s<br />     * <br />     * $out = array(12) {<br />     *   [0]                =&gt; string(9) "plain-arg"<br />     *   ["foo"]            =&gt; bool(true)<br />     *   ["bar"]            =&gt; string(3) "baz"<br />     *   ["funny"]          =&gt; string(9) "spam=eggs"<br />     *   ["alsofunny"]      =&gt; string(9) "spam=eggs"<br />     *   [1]                =&gt; string(11) "plain arg 2"<br />     *   ["a"]              =&gt; bool(true)<br />     *   ["b"]              =&gt; bool(true)<br />     *   ["c"]              =&gt; bool(true)<br />     *   ["k"]              =&gt; string(5) "value"<br />     *   [2]                =&gt; string(11) "plain arg 3"<br />     *   ["s"]              =&gt; string(9) "overwrite"<br />     * }<br />     *<br />     * @author              Patrick Fisher &lt;patrick@pwfisher.com&gt;<br />     * @since               August 21, 2009<br />     * @see                 <a href="http://www.php.net/manual/en/features.commandline.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/features.commandline.php</a><br />     *                      #81042 function arguments($argv) by technorati at gmail dot com, 12-Feb-2008<br />     *                      #78651 function getArgs($args) by B Crawford, 22-Oct-2007<br />     * @usage               $args = CommandLine::parseArgs($_SERVER['argv']);<br />     */<br />    </span><span class="keyword">public static function </span><span class="default">parseArgs</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">){<br />    <br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$argv</span><span class="keyword">);<br />        </span><span class="default">$out                            </span><span class="keyword">= array();<br />        <br />        foreach (</span><span class="default">$argv </span><span class="keyword">as </span><span class="default">$arg</span><span class="keyword">){<br />        <br />            </span><span class="comment">// --foo --bar=baz<br />            </span><span class="keyword">if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">) == </span><span class="string">'--'</span><span class="keyword">){<br />                </span><span class="default">$eqPos                  </span><span class="keyword">= </span><span class="default">strpos</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="string">'='</span><span class="keyword">);<br />                <br />                </span><span class="comment">// --foo<br />                </span><span class="keyword">if (</span><span class="default">$eqPos </span><span class="keyword">=== </span><span class="default">false</span><span class="keyword">){<br />                    </span><span class="default">$key                </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">);<br />                    </span><span class="default">$value              </span><span class="keyword">= isset(</span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) ? </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] : </span><span class="default">true</span><span class="keyword">;<br />                    </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]          = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />                </span><span class="comment">// --bar=baz<br />                </span><span class="keyword">else {<br />                    </span><span class="default">$key                </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">$eqPos</span><span class="keyword">-</span><span class="default">2</span><span class="keyword">);<br />                    </span><span class="default">$value              </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">$eqPos</span><span class="keyword">+</span><span class="default">1</span><span class="keyword">);<br />                    </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]          = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />            }<br />            </span><span class="comment">// -k=value -abc<br />            </span><span class="keyword">else if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) == </span><span class="string">'-'</span><span class="keyword">){<br />            <br />                </span><span class="comment">// -k=value<br />                </span><span class="keyword">if (</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">) == </span><span class="string">'='</span><span class="keyword">){<br />                    </span><span class="default">$key                </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br />                    </span><span class="default">$value              </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">);<br />                    </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]          = </span><span class="default">$value</span><span class="keyword">;<br />                }<br />                </span><span class="comment">// -abc<br />                </span><span class="keyword">else {<br />                    </span><span class="default">$chars              </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$arg</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">));<br />                    foreach (</span><span class="default">$chars </span><span class="keyword">as </span><span class="default">$char</span><span class="keyword">){<br />                        </span><span class="default">$key            </span><span class="keyword">= </span><span class="default">$char</span><span class="keyword">;<br />                        </span><span class="default">$value          </span><span class="keyword">= isset(</span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]) ? </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">] : </span><span class="default">true</span><span class="keyword">;<br />                        </span><span class="default">$out</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]      = </span><span class="default">$value</span><span class="keyword">;<br />                    }<br />                }<br />            }<br />            </span><span class="comment">// plain-arg<br />            </span><span class="keyword">else {<br />                </span><span class="default">$value                  </span><span class="keyword">= </span><span class="default">$arg</span><span class="keyword">;<br />                </span><span class="default">$out</span><span class="keyword">[]                  = </span><span class="default">$value</span><span class="keyword">;<br />            }<br />        }<br />        return </span><span class="default">$out</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="56945">  <div class="votes">
    <div id="Vu56945">
    <a href="/manual/vote-note.php?id=56945&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56945">
    <a href="/manual/vote-note.php?id=56945&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56945" title="52% like this...">
    1
    </div>
  </div>
  <a href="#56945" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#56945"> &para;</a><div class="date" title="2005-09-19 07:57"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56945">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">//----------------------------------------------------------<br />// The combination of array_shift/array_unshift <br />// greatly simplified a function I created for <br />// generating relative paths. Before I found them <br />// the algorithm was really squirrely, with multiple <br />// if tests, length calculations, nested loops, etc. <br />// Great functions.<br />//----------------------------------------------------------<br /><br /></span><span class="keyword">function </span><span class="default">create_relative_path</span><span class="keyword">(</span><span class="default">$inSourcePath</span><span class="keyword">, </span><span class="default">$inRefPath</span><span class="keyword">)<br />{<br />    </span><span class="comment">// break strings at slashes<br />    </span><span class="default">$s_parts            </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$inSourcePath</span><span class="keyword">);<br />    </span><span class="default">$r_parts            </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$inRefPath</span><span class="keyword">);<br />    <br />    </span><span class="comment">// delete items up to the first non-equal part<br />    </span><span class="keyword">while (</span><span class="default">$s_parts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] === </span><span class="default">$r_parts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])<br />    {<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$s_parts</span><span class="keyword">);<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$r_parts</span><span class="keyword">);<br />    }<br />    <br />    </span><span class="comment">// add wild card to r_parts for each remaining <br />    // item of s_parts<br />    </span><span class="keyword">while (</span><span class="default">$s_parts</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">])<br />    {<br />        </span><span class="default">array_unshift</span><span class="keyword">(</span><span class="default">$r_parts</span><span class="keyword">, </span><span class="string">'..'</span><span class="keyword">);<br />        </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$s_parts</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">implode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">$r_parts</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//----------------------------------------------------------<br />// Example:<br />//     Given a source path $sp generates the relative <br />//     location of $rp. $sp could be assigned using <br />//     $_SERVER['PHP_SELF'] but it's hardcoded for <br />//     the example.<br />//----------------------------------------------------------<br /></span><span class="default">$sp </span><span class="keyword">= </span><span class="string">'/WebServer/Documents/MyBigProject/php/project_script.php'</span><span class="keyword">;<br /></span><span class="default">$rp </span><span class="keyword">= </span><span class="string">'/WebServer/Documents/MyLibraries/lib_script.php'</span><span class="keyword">;<br /><br /></span><span class="comment">// plugging them into the function<br /></span><span class="default">$rel_path </span><span class="keyword">= </span><span class="default">create_relative_path</span><span class="keyword">(</span><span class="default">$sp</span><span class="keyword">, </span><span class="default">$rp</span><span class="keyword">);<br /><br /></span><span class="comment">// yeilds<br /></span><span class="string">'../../../MyLibraries/lib_script.php'<br /><br /></span><span class="comment">// and it could be used like<br /></span><span class="keyword">include_once(</span><span class="default">create_relative_path</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'PHP_SELF'</span><span class="keyword">], </span><span class="default">$rp</span><span class="keyword">));</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127563">  <div class="votes">
    <div id="Vu127563">
    <a href="/manual/vote-note.php?id=127563&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127563">
    <a href="/manual/vote-note.php?id=127563&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127563" title="50% like this...">
    0
    </div>
  </div>
  <a href="#127563" class="name">
  <strong class="user"><em>malima</em></strong></a><a class="genanchor" href="#127563"> &para;</a><div class="date" title="2022-08-31 08:12"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127563">
<div class="phpcode"><code><span class="html">A simple benchmark (PHP 8.1.9 + macOS 12.4)<br /><br /><span class="default">&lt;?php<br /><br />ini_set</span><span class="keyword">(</span><span class="string">'memory_limit'</span><span class="keyword">, -</span><span class="default">1</span><span class="keyword">);<br /><br /></span><span class="default">$times </span><span class="keyword">= </span><span class="default">25_000</span><span class="keyword">;<br /></span><span class="default">$length </span><span class="keyword">= </span><span class="default">256</span><span class="keyword">;<br /></span><span class="default">$arr </span><span class="keyword">= [];<br /><br /></span><span class="default">$random </span><span class="keyword">= </span><span class="default">random_bytes</span><span class="keyword">((</span><span class="default">$times </span><span class="keyword">+ </span><span class="default">$length</span><span class="keyword">) / </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">$random </span><span class="keyword">= </span><span class="default">bin2hex</span><span class="keyword">(</span><span class="default">$random</span><span class="keyword">);<br /><br /></span><span class="comment">// benchmark array_shift()<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$random</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$shiftTimer </span><span class="keyword">= -</span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />}<br /></span><span class="default">$shiftTimer </span><span class="keyword">+= </span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// benchmark array_reverse() + array_pop() + array_reverse()<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$random</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$reverseTimer </span><span class="keyword">= -</span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />}<br /></span><span class="default">$reverseTimer </span><span class="keyword">+= </span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// benchmark array_reverse() + array_pop()<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$random</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$popTimer </span><span class="keyword">= -</span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$arr </span><span class="keyword">= </span><span class="default">array_reverse</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />}<br /></span><span class="default">$popTimer </span><span class="keyword">+= </span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// benchmark $arr[key()]+ unset(key())<br /></span><span class="keyword">for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$random</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">, </span><span class="default">$length</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$keyTimer </span><span class="keyword">= -</span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">reset</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$times</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />    </span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">];<br />    unset(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$key</span><span class="keyword">]);<br />}<br /></span><span class="default">$keyTimer </span><span class="keyword">+= </span><span class="default">hrtime</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">print_r</span><span class="keyword">([<br />    </span><span class="string">'shift' </span><span class="keyword">=&gt; </span><span class="default">$shiftTimer </span><span class="keyword">/ (</span><span class="default">10 </span><span class="keyword">** </span><span class="default">9</span><span class="keyword">),<br />    </span><span class="string">'reverse' </span><span class="keyword">=&gt; </span><span class="default">$reverseTimer </span><span class="keyword">/ (</span><span class="default">10 </span><span class="keyword">** </span><span class="default">9</span><span class="keyword">),<br />    </span><span class="string">'pop' </span><span class="keyword">=&gt; </span><span class="default">$popTimer </span><span class="keyword">/ (</span><span class="default">10 </span><span class="keyword">** </span><span class="default">9</span><span class="keyword">),<br />    </span><span class="string">'key' </span><span class="keyword">=&gt; </span><span class="default">$keyTimer </span><span class="keyword">/ (</span><span class="default">10 </span><span class="keyword">** </span><span class="default">9</span><span class="keyword">),<br />]);<br /><br /></span><span class="default">?&gt;<br /></span><br />Results interpretation:<br /><br />On an array of 25,000 unique items, each item a string of 256 byte:<br /><br />and key() + unset() is very fast.<br /><br />array_shift() is ~400 times slower<br /><br />array_reverse() + array_pop() + array_reverse() is ~5,000 times slower.<br /><br />p.s. I'm implementing a queue, so I need to add another array_reverse() after array_pop() which makes it extremely slow inside a loop. array_reverse() + array_pop() has no use for me, I just added for sake of checking it's performance. It is as fast as key() + unset().</span></code></div>
  </div>
 </div>
  <div class="note" id="125152">  <div class="votes">
    <div id="Vu125152">
    <a href="/manual/vote-note.php?id=125152&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125152">
    <a href="/manual/vote-note.php?id=125152&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125152" title="100% like this...">
    1
    </div>
  </div>
  <a href="#125152" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125152"> &para;</a><div class="date" title="2020-06-29 07:05"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom125152">
<div class="phpcode"><code><span class="html">"$stack" in the example should be called "$queue".</span></code></div>
  </div>
 </div>
  <div class="note" id="124238">  <div class="votes">
    <div id="Vu124238">
    <a href="/manual/vote-note.php?id=124238&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124238">
    <a href="/manual/vote-note.php?id=124238&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124238" title="100% like this...">
    1
    </div>
  </div>
  <a href="#124238" class="name">
  <strong class="user"><em>wheberson dot com dot br at gmail dot com</em></strong></a><a class="genanchor" href="#124238"> &para;</a><div class="date" title="2019-09-26 01:35"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom124238">
<div class="phpcode"><code><span class="html">// Ex. 1: signedShiftArray (['A', 'B', 'C', 'D'], 2)        -&gt;        ['C', 'D', 'A', 'B']<br />// Ex. 2: signedShiftArray (['A', 'B', 'C', 'D'], -3)        -&gt;        ['B', 'C', 'D', 'A']<br />// Ex. 3: signedShiftArray (['A', 'B', 'C', 'D'], -7)        -&gt;        ['B', 'C', 'D', 'A']<br /><br />function signedShiftArray ($aItems, $aOffset)<br /><br />{<br />    if (empty ($aItems))<br />        return [];<br />    else if (empty ($aOffset))<br />        return $aItems;<br />    else {<br />        $t= count ($aItems);<br />        $n= $aOffset % $t;<br />        $m= $aOffset &gt; 0 ? $n : $t + $aOffset;<br />        return array_merge (array_slice ($aItems, $n), array_slice ($aItems, 0, $m));<br />    }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="123667">  <div class="votes">
    <div id="Vu123667">
    <a href="/manual/vote-note.php?id=123667&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123667">
    <a href="/manual/vote-note.php?id=123667&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123667" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123667" class="name">
  <strong class="user"><em>vasiliauskas dot agnius at gmail dot com</em></strong></a><a class="genanchor" href="#123667"> &para;</a><div class="date" title="2019-03-07 08:37"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123667">
<div class="phpcode"><code><span class="html">Sometimes instead of shuffling array you just need to rotate it. We can easily rotate left an array with such code:<br /><span class="default">&lt;?php<br />$arr</span><span class="keyword">[] = </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113061">  <div class="votes">
    <div id="Vu113061">
    <a href="/manual/vote-note.php?id=113061&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113061">
    <a href="/manual/vote-note.php?id=113061&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113061" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113061" class="name">
  <strong class="user"><em>drum_inc at yahoo dot com</em></strong></a><a class="genanchor" href="#113061"> &para;</a><div class="date" title="2013-08-23 05:27"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113061">
<div class="phpcode"><code><span class="html">Assignment in line, does not remove the element.<br /><br />$first = array_shift( $arr = array( 0 =&gt; '1st', 2 =&gt; '2nd', 3 =&gt; '3rd') );<br />print_r( $first );<br />print_r( $arr );<br /><br />Output:<br />1st<br />Array<br />(<br />    [0] =&gt; 1st<br />    [2] =&gt; 2nd<br />    [3] =&gt; 3rd<br />)</span></code></div>
  </div>
 </div>
  <div class="note" id="85596">  <div class="votes">
    <div id="Vu85596">
    <a href="/manual/vote-note.php?id=85596&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd85596">
    <a href="/manual/vote-note.php?id=85596&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V85596" title="50% like this...">
    0
    </div>
  </div>
  <a href="#85596" class="name">
  <strong class="user"><em>sggoyal at gmail dot com</em></strong></a><a class="genanchor" href="#85596"> &para;</a><div class="date" title="2008-09-07 10:08"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom85596">
<div class="phpcode"><code><span class="html">// To Change order of Array by Saurabh Goyal<br />    function change_array_order($table,$order)<br />    {<br />       //init the new table<br />       $new_table = array();<br />       foreach($order as $colname)<br />       {<br />          $new_table[$colname] = $table[$colname];<br />       }<br />       return $new_table;<br />    }<br /><br />if array value like:-<br />$row = array('usr_id'=&gt;'23','usr_name'=&gt;'Saurabh', 'usr_surname'=&gt;'Goyal','usr_firstname'=&gt;'Saurabh');<br /><br />//you want change order &amp; show only particular field<br />change_array_order($row,array('usr_name','usr_firstname',<br />                                            'usr_surname'));<br /><br />Regard's<br /><br />Saurabh Goyal<br /><a href="http://sggoyal.blogspot.com" rel="nofollow" target="_blank">http://sggoyal.blogspot.com</a></span></code></div>
  </div>
 </div>
  <div class="note" id="78207">  <div class="votes">
    <div id="Vu78207">
    <a href="/manual/vote-note.php?id=78207&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78207">
    <a href="/manual/vote-note.php?id=78207&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78207" title="50% like this...">
    0
    </div>
  </div>
  <a href="#78207" class="name">
  <strong class="user"><em>Ben</em></strong></a><a class="genanchor" href="#78207"> &para;</a><div class="date" title="2007-10-02 09:17"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78207">
<div class="phpcode"><code><span class="html">baughmankr at appstate dot edu, I think this is more efficient.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_shorten</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)<br />{<br />  list(</span><span class="default">$k</span><span class="keyword">) = </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />  unset(</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]);<br />  return </span><span class="default">$arr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="77892">  <div class="votes">
    <div id="Vu77892">
    <a href="/manual/vote-note.php?id=77892&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77892">
    <a href="/manual/vote-note.php?id=77892&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77892" title="50% like this...">
    0
    </div>
  </div>
  <a href="#77892" class="name">
  <strong class="user"><em>baughmankr at appstate dot edu</em></strong></a><a class="genanchor" href="#77892"> &para;</a><div class="date" title="2007-09-18 02:04"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77892">
<div class="phpcode"><code><span class="html">I needed to remove the first set of keys and values from an associative array.  Had to write this function: <br /><br />function shortenArray($_arr)<br />{<br />    $i=1;<br />    $_shorter=array();<br />    foreach ($_arr as $k =&gt; $v)<br />    {<br />        if ($i != 1)<br />        {<br />            $_shorter[$k] = $v;<br />        }<br />        $i++;<br />    }<br />    return $_shorter;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="74463">  <div class="votes">
    <div id="Vu74463">
    <a href="/manual/vote-note.php?id=74463&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74463">
    <a href="/manual/vote-note.php?id=74463&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74463" title="50% like this...">
    0
    </div>
  </div>
  <a href="#74463" class="name">
  <strong class="user"><em>richard at happymango dot me dot uk</em></strong></a><a class="genanchor" href="#74463"> &para;</a><div class="date" title="2007-04-12 06:09"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74463">
<div class="phpcode"><code><span class="html">If you want to loop through an array, removing its values one at a time using array_shift() but also want the key as well, try this. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">while(</span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">))<br />{<br />     </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />     </span><span class="comment">//code goes here<br /></span><span class="keyword">}<br /><br /></span><span class="default">?&gt;<br /></span><br />its like foreach but each time the value is removed from the array so it eventually ends up empty<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//example below<br /><br /></span><span class="default">$airports </span><span class="keyword">= array<br />(<br />    </span><span class="string">"LGW" </span><span class="keyword">=&gt; </span><span class="string">"London Gatwick"</span><span class="keyword">,<br />    </span><span class="string">"LHR" </span><span class="keyword">=&gt; </span><span class="string">"London Heathrow"</span><span class="keyword">,<br />    </span><span class="string">"STN" </span><span class="keyword">=&gt; </span><span class="string">"London Stanstead"<br /></span><span class="keyword">);<br /><br />echo </span><span class="default">count</span><span class="keyword">(</span><span class="default">$airports</span><span class="keyword">).</span><span class="string">" Airport in the array&lt;br /&gt;&lt;br /&gt;"</span><span class="keyword">;<br /><br />while(</span><span class="default">$key </span><span class="keyword">= </span><span class="default">key</span><span class="keyword">(</span><span class="default">$airports</span><span class="keyword">))<br />{<br />    </span><span class="default">$value </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$airports</span><span class="keyword">);<br />    echo </span><span class="default">$key</span><span class="keyword">.</span><span class="string">" is "</span><span class="keyword">.</span><span class="default">$value</span><span class="keyword">.</span><span class="string">"&lt;br /&gt;"</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">.</span><span class="default">count</span><span class="keyword">(</span><span class="default">$airports</span><span class="keyword">).</span><span class="string">" Airport left in the array"</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />Example Outputs:<br /><br />3 Airport in the array<br /><br />LGW is London Gatwick<br />LHR is London Heathrow<br />STN is London Stanstead<br /><br />0 Airport left in the array</span></code></div>
  </div>
 </div>
  <div class="note" id="55194">  <div class="votes">
    <div id="Vu55194">
    <a href="/manual/vote-note.php?id=55194&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55194">
    <a href="/manual/vote-note.php?id=55194&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55194" title="50% like this...">
    0
    </div>
  </div>
  <a href="#55194" class="name">
  <strong class="user"><em>lukasz dot dywicki DEL at  gmail dot com</em></strong></a><a class="genanchor" href="#55194"> &para;</a><div class="date" title="2005-07-27 05:48"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55194">
<div class="phpcode"><code><span class="html">Im using this function to browse arrays from database. For example data:<br /><span class="default">&lt;?php<br />$data </span><span class="keyword">= array(<br />      array(</span><span class="string">'row 1-cell 1'</span><span class="keyword">,</span><span class="string">'row 1-cell 2'</span><span class="keyword">),<br />      array(</span><span class="string">'row 2-cell 1'</span><span class="keyword">,</span><span class="string">'row 2-cell 2'</span><span class="keyword">),<br />      array(</span><span class="string">'row 3-cell 1'</span><span class="keyword">,</span><span class="string">'row 3-cell 2'</span><span class="keyword">),<br />);<br /><br />while(</span><span class="default">$row</span><span class="keyword">=</span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">)) {<br />      echo </span><span class="default">$row</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">];<br />}<br /></span><span class="default">?&gt;<br /></span>Output:<br />row 1-cell 1<br />row 2-cell 1<br />row 3-cell 1</span></code></div>
  </div>
 </div>
  <div class="note" id="48182">  <div class="votes">
    <div id="Vu48182">
    <a href="/manual/vote-note.php?id=48182&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48182">
    <a href="/manual/vote-note.php?id=48182&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48182" title="50% like this...">
    0
    </div>
  </div>
  <a href="#48182" class="name">
  <strong class="user"><em>James McGuigan</em></strong></a><a class="genanchor" href="#48182"> &para;</a><div class="date" title="2004-12-14 11:26"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48182">
<div class="phpcode"><code><span class="html">while(array_shift()) can be used to process multiple arrays and/or database results in a single loop. The || short circuts and only evaluates the first statement until it runs out of data.<br /><br />It can help to reduce duplicated code (the rule is code once and once only).<br /><br />Note that each ($row = ) statement much be encased in ()'s otherwise you will get funny results. If you use two array_shift($array) statements and forget the ()'s, you will repeatedly get the first element of the first array for the for the count of the $array.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">require_once(</span><span class="string">'class.db.php'</span><span class="keyword">);<br /><br /></span><span class="default">$sql </span><span class="keyword">= </span><span class="string">"SELECT title FROM links"</span><span class="keyword">;<br /></span><span class="default">$result </span><span class="keyword">= </span><span class="default">mysql_query</span><span class="keyword">(</span><span class="default">$sql</span><span class="keyword">, </span><span class="default">$db</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">);<br /><br /></span><span class="default">$defaults </span><span class="keyword">= array(<br />     array(</span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'None'</span><span class="keyword">), <br />     array(</span><span class="string">'title' </span><span class="keyword">=&gt; </span><span class="string">'Unknown'</span><span class="keyword">)<br />);<br /><br />while ( (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">mysql_fetch_assoc</span><span class="keyword">(</span><span class="default">$result</span><span class="keyword">)) <br />     || (</span><span class="default">$row </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">$defaults</span><span class="keyword">))) <br />{<br />  echo </span><span class="default">$row</span><span class="keyword">[</span><span class="string">'title'</span><span class="keyword">] . </span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This will print out (depending on database contents):<br />Title1<br />Title2<br />Title3<br />...<br />None<br />Unknown</span></code></div>
  </div>
 </div>
  <div class="note" id="68767">  <div class="votes">
    <div id="Vu68767">
    <a href="/manual/vote-note.php?id=68767&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68767">
    <a href="/manual/vote-note.php?id=68767&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68767" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#68767" class="name">
  <strong class="user"><em>alreece45 at yahoo dot com</em></strong></a><a class="genanchor" href="#68767"> &para;</a><div class="date" title="2006-08-09 08:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68767">
<div class="phpcode"><code><span class="html">I haven't really read into it, but if you're complaining about a change in PHP 5.0.5 that made it so you couldn't do:<br /><br /><span class="default">&lt;?php<br /><br />$val </span><span class="keyword">= </span><span class="default">array_shift</span><span class="keyword">(</span><span class="default">preg_split</span><span class="keyword">());<br /><br /></span><span class="default">?&gt;<br /></span><br />or<br /><br /><span class="default">&lt;?php<br /><br />$val </span><span class="keyword">= </span><span class="default">array_shit</span><span class="keyword">(</span><span class="default">function_that_returns_array</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />Then you're not using this function correctly. This function's argument is supposed to be a pointer to a variable. It then modifies that variable and returns a value. When you specify a function, php CAN NOT modify the return value of that function. It should be common sense but apparently its not.<br /><br />Also, on a efficiency note, you might want to consider using another function such as reset or perhaps making your own function such as below:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">first_element</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">) {<br /><br />return </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br /><br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Unless of course for some reason you need to save the microseconds this takes.<br /><br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="99391">  <div class="votes">
    <div id="Vu99391">
    <a href="/manual/vote-note.php?id=99391&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99391">
    <a href="/manual/vote-note.php?id=99391&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99391" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#99391" class="name">
  <strong class="user"><em>ar at xonix dot ch</em></strong></a><a class="genanchor" href="#99391"> &para;</a><div class="date" title="2010-08-14 03:54"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99391">
<div class="phpcode"><code><span class="html">If you need the first or last entry of an array, then this could help you.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">array_last_entry</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">){<br />    if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">))<br />        return;<br />    <br />    if(empty(</span><span class="default">$arr</span><span class="keyword">))<br />        return;<br />        <br />    return </span><span class="default">end</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">array_first_entry</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">){<br />    if(!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">))<br />        return;<br />        <br />    if(empty(</span><span class="default">$arr</span><span class="keyword">))<br />        return;<br />        <br />    </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);<br />    return </span><span class="default">current</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">);    <br />}<br /><br /></span><span class="default">$arr </span><span class="keyword">= array( </span><span class="string">'5' </span><span class="keyword">=&gt; </span><span class="string">'five'</span><span class="keyword">, </span><span class="string">'3' </span><span class="keyword">=&gt; </span><span class="string">'three'</span><span class="keyword">, </span><span class="string">'8' </span><span class="keyword">=&gt; </span><span class="string">'eight'</span><span class="keyword">,);<br /><br />echo </span><span class="string">'last entry: '</span><span class="keyword">.</span><span class="default">array_last_entry</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br />echo </span><span class="string">'first entry: '</span><span class="keyword">.</span><span class="default">array_first_entry</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">;<br /><br />echo </span><span class="string">'alternative output:&lt;br&gt;'</span><span class="keyword">;<br /> <br />echo </span><span class="string">'last entry: '</span><span class="keyword">.</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">count</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">];<br /><br />echo </span><span class="string">'&lt;br&gt;first entry: '</span><span class="keyword">.</span><span class="default">$arr</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]; <br /></span><span class="default">?&gt;<br /></span><br />The output will look like:<br />last entry: eight<br />first entry: five<br />alternative output:<br />last entry:<br />first entry: <br /><br />As you can see, if you have to handle arrays with non-continuous indexes, these functions may be very helpful.</span></code></div>
  </div>
 </div>
  <div class="note" id="74855">  <div class="votes">
    <div id="Vu74855">
    <a href="/manual/vote-note.php?id=74855&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74855">
    <a href="/manual/vote-note.php?id=74855&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74855" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#74855" class="name">
  <strong class="user"><em>C_Prevost at myob</em></strong></a><a class="genanchor" href="#74855"> &para;</a><div class="date" title="2007-04-30 04:52"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74855">
<div class="phpcode"><code><span class="html">no, it demonstrates quite well that it removes the first element in the original array, updating the keys, and that it also returns the original first element.</span></code></div>
  </div>
 </div>
  <div class="note" id="66887">  <div class="votes">
    <div id="Vu66887">
    <a href="/manual/vote-note.php?id=66887&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66887">
    <a href="/manual/vote-note.php?id=66887&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66887" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#66887" class="name">
  <strong class="user"><em>bmr at ediweb dot org</em></strong></a><a class="genanchor" href="#66887"> &para;</a><div class="date" title="2006-05-31 07:27"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66887">
<div class="phpcode"><code><span class="html">If the array has non-numerical keys, array_shift extracts the first element, whichever is the key, and recompute the numerical keys, if there are any. Ie :<br /><br />$array = array("c" =&gt; "ccc", 0 =&gt; "aaa", "d" =&gt; "ddd", 5 =&gt; "bbb");<br />$first = array_shift($array);<br />echo '$first = ' . $first . ', $array = ' . var_export($array, true);<br /><br />will display :<br /><br />$first = ccc, $array = array ( 0 =&gt; 'aaa', 'd' =&gt; 'ddd', 1 =&gt; 'bbb', )<br /><br />It means that array_shift works with associative arrays too, and leaves the keys unchanged if they are non-numerical.</span></code></div>
  </div>
 </div>
  <div class="note" id="76963">  <div class="votes">
    <div id="Vu76963">
    <a href="/manual/vote-note.php?id=76963&amp;page=function.array-shift&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76963">
    <a href="/manual/vote-note.php?id=76963&amp;page=function.array-shift&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76963" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#76963" class="name">
  <strong class="user"><em>dmhouse at gmail dot com</em></strong></a><a class="genanchor" href="#76963"> &para;</a><div class="date" title="2007-08-08 01:54"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76963">
<div class="phpcode"><code><span class="html">If you want a version of array_shift() that works non-destructively (i.e., an easy function to grab the first element of the array without modifying the array), try reset().</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.array-shift&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.array-shift.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.array.php">Array Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.array.php" title="array">array</a>
                        </li>
                                                <li class="">
                            <a href="function.array-all.php" title="array_&#8203;all">array_&#8203;all</a>
                        </li>
                                                <li class="">
                            <a href="function.array-any.php" title="array_&#8203;any">array_&#8203;any</a>
                        </li>
                                                <li class="">
                            <a href="function.array-change-key-case.php" title="array_&#8203;change_&#8203;key_&#8203;case">array_&#8203;change_&#8203;key_&#8203;case</a>
                        </li>
                                                <li class="">
                            <a href="function.array-chunk.php" title="array_&#8203;chunk">array_&#8203;chunk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-column.php" title="array_&#8203;column">array_&#8203;column</a>
                        </li>
                                                <li class="">
                            <a href="function.array-combine.php" title="array_&#8203;combine">array_&#8203;combine</a>
                        </li>
                                                <li class="">
                            <a href="function.array-count-values.php" title="array_&#8203;count_&#8203;values">array_&#8203;count_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff.php" title="array_&#8203;diff">array_&#8203;diff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-assoc.php" title="array_&#8203;diff_&#8203;assoc">array_&#8203;diff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-key.php" title="array_&#8203;diff_&#8203;key">array_&#8203;diff_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-uassoc.php" title="array_&#8203;diff_&#8203;uassoc">array_&#8203;diff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-diff-ukey.php" title="array_&#8203;diff_&#8203;ukey">array_&#8203;diff_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill.php" title="array_&#8203;fill">array_&#8203;fill</a>
                        </li>
                                                <li class="">
                            <a href="function.array-fill-keys.php" title="array_&#8203;fill_&#8203;keys">array_&#8203;fill_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-filter.php" title="array_&#8203;filter">array_&#8203;filter</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find.php" title="array_&#8203;find">array_&#8203;find</a>
                        </li>
                                                <li class="">
                            <a href="function.array-find-key.php" title="array_&#8203;find_&#8203;key">array_&#8203;find_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-flip.php" title="array_&#8203;flip">array_&#8203;flip</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect.php" title="array_&#8203;intersect">array_&#8203;intersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-assoc.php" title="array_&#8203;intersect_&#8203;assoc">array_&#8203;intersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-key.php" title="array_&#8203;intersect_&#8203;key">array_&#8203;intersect_&#8203;key</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-uassoc.php" title="array_&#8203;intersect_&#8203;uassoc">array_&#8203;intersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-intersect-ukey.php" title="array_&#8203;intersect_&#8203;ukey">array_&#8203;intersect_&#8203;ukey</a>
                        </li>
                                                <li class="">
                            <a href="function.array-is-list.php" title="array_&#8203;is_&#8203;list">array_&#8203;is_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-exists.php" title="array_&#8203;key_&#8203;exists">array_&#8203;key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-first.php" title="array_&#8203;key_&#8203;first">array_&#8203;key_&#8203;first</a>
                        </li>
                                                <li class="">
                            <a href="function.array-key-last.php" title="array_&#8203;key_&#8203;last">array_&#8203;key_&#8203;last</a>
                        </li>
                                                <li class="">
                            <a href="function.array-keys.php" title="array_&#8203;keys">array_&#8203;keys</a>
                        </li>
                                                <li class="">
                            <a href="function.array-map.php" title="array_&#8203;map">array_&#8203;map</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge.php" title="array_&#8203;merge">array_&#8203;merge</a>
                        </li>
                                                <li class="">
                            <a href="function.array-merge-recursive.php" title="array_&#8203;merge_&#8203;recursive">array_&#8203;merge_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-multisort.php" title="array_&#8203;multisort">array_&#8203;multisort</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pad.php" title="array_&#8203;pad">array_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.array-pop.php" title="array_&#8203;pop">array_&#8203;pop</a>
                        </li>
                                                <li class="">
                            <a href="function.array-product.php" title="array_&#8203;product">array_&#8203;product</a>
                        </li>
                                                <li class="">
                            <a href="function.array-push.php" title="array_&#8203;push">array_&#8203;push</a>
                        </li>
                                                <li class="">
                            <a href="function.array-rand.php" title="array_&#8203;rand">array_&#8203;rand</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reduce.php" title="array_&#8203;reduce">array_&#8203;reduce</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace.php" title="array_&#8203;replace">array_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.array-replace-recursive.php" title="array_&#8203;replace_&#8203;recursive">array_&#8203;replace_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.array-reverse.php" title="array_&#8203;reverse">array_&#8203;reverse</a>
                        </li>
                                                <li class="">
                            <a href="function.array-search.php" title="array_&#8203;search">array_&#8203;search</a>
                        </li>
                                                <li class="current">
                            <a href="function.array-shift.php" title="array_&#8203;shift">array_&#8203;shift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-slice.php" title="array_&#8203;slice">array_&#8203;slice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-splice.php" title="array_&#8203;splice">array_&#8203;splice</a>
                        </li>
                                                <li class="">
                            <a href="function.array-sum.php" title="array_&#8203;sum">array_&#8203;sum</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff.php" title="array_&#8203;udiff">array_&#8203;udiff</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-assoc.php" title="array_&#8203;udiff_&#8203;assoc">array_&#8203;udiff_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-udiff-uassoc.php" title="array_&#8203;udiff_&#8203;uassoc">array_&#8203;udiff_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect.php" title="array_&#8203;uintersect">array_&#8203;uintersect</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-assoc.php" title="array_&#8203;uintersect_&#8203;assoc">array_&#8203;uintersect_&#8203;assoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-uintersect-uassoc.php" title="array_&#8203;uintersect_&#8203;uassoc">array_&#8203;uintersect_&#8203;uassoc</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unique.php" title="array_&#8203;unique">array_&#8203;unique</a>
                        </li>
                                                <li class="">
                            <a href="function.array-unshift.php" title="array_&#8203;unshift">array_&#8203;unshift</a>
                        </li>
                                                <li class="">
                            <a href="function.array-values.php" title="array_&#8203;values">array_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk.php" title="array_&#8203;walk">array_&#8203;walk</a>
                        </li>
                                                <li class="">
                            <a href="function.array-walk-recursive.php" title="array_&#8203;walk_&#8203;recursive">array_&#8203;walk_&#8203;recursive</a>
                        </li>
                                                <li class="">
                            <a href="function.arsort.php" title="arsort">arsort</a>
                        </li>
                                                <li class="">
                            <a href="function.asort.php" title="asort">asort</a>
                        </li>
                                                <li class="">
                            <a href="function.compact.php" title="compact">compact</a>
                        </li>
                                                <li class="">
                            <a href="function.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="function.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="function.end.php" title="end">end</a>
                        </li>
                                                <li class="">
                            <a href="function.extract.php" title="extract">extract</a>
                        </li>
                                                <li class="">
                            <a href="function.in-array.php" title="in_&#8203;array">in_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="function.key-exists.php" title="key_&#8203;exists">key_&#8203;exists</a>
                        </li>
                                                <li class="">
                            <a href="function.krsort.php" title="krsort">krsort</a>
                        </li>
                                                <li class="">
                            <a href="function.ksort.php" title="ksort">ksort</a>
                        </li>
                                                <li class="">
                            <a href="function.list.php" title="list">list</a>
                        </li>
                                                <li class="">
                            <a href="function.natcasesort.php" title="natcasesort">natcasesort</a>
                        </li>
                                                <li class="">
                            <a href="function.natsort.php" title="natsort">natsort</a>
                        </li>
                                                <li class="">
                            <a href="function.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="function.pos.php" title="pos">pos</a>
                        </li>
                                                <li class="">
                            <a href="function.prev.php" title="prev">prev</a>
                        </li>
                                                <li class="">
                            <a href="function.range.php" title="range">range</a>
                        </li>
                                                <li class="">
                            <a href="function.reset.php" title="reset">reset</a>
                        </li>
                                                <li class="">
                            <a href="function.rsort.php" title="rsort">rsort</a>
                        </li>
                                                <li class="">
                            <a href="function.shuffle.php" title="shuffle">shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.sizeof.php" title="sizeof">sizeof</a>
                        </li>
                                                <li class="">
                            <a href="function.sort.php" title="sort">sort</a>
                        </li>
                                                <li class="">
                            <a href="function.uasort.php" title="uasort">uasort</a>
                        </li>
                                                <li class="">
                            <a href="function.uksort.php" title="uksort">uksort</a>
                        </li>
                                                <li class="">
                            <a href="function.usort.php" title="usort">usort</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.each.php" title="each">each</a>
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
