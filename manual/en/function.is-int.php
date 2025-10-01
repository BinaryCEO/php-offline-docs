<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: is_int - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.is-int.php">
 <link rel="shorturl" href="https://www.php.net/is-int">
 <link rel="alternate" href="https://www.php.net/is-int" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.is-float.php">
 <link rel="next" href="https://www.php.net/manual/en/function.is-integer.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.is-int.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.is-int.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.is-int.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.is-int.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.is-int.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.is-int.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.is-int.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.is-int.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.is-int.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.is-int.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.is-int.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Find whether the type of a variable is integer" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: is_int - Manual" />
<meta name="twitter:description" content="Find whether the type of a variable is integer" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: is_int - Manual" />
<meta itemprop="description" content="Find whether the type of a variable is integer" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Find whether the type of a variable is integer" />

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
        <a href="function.is-integer.php">
          is_integer &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.is-float.php">
          &laquo; is_float        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.is-int.php' selected="selected">English</option>
            <option value='de/function.is-int.php'>German</option>
            <option value='es/function.is-int.php'>Spanish</option>
            <option value='fr/function.is-int.php'>French</option>
            <option value='it/function.is-int.php'>Italian</option>
            <option value='ja/function.is-int.php'>Japanese</option>
            <option value='pt_BR/function.is-int.php'>Brazilian Portuguese</option>
            <option value='ru/function.is-int.php'>Russian</option>
            <option value='tr/function.is-int.php'>Turkish</option>
            <option value='uk/function.is-int.php'>Ukrainian</option>
            <option value='zh/function.is-int.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.is-int" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">is_int</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">is_int</span> &mdash; <span class="dc-title">Find whether the type of a variable is integer</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.is-int-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>is_int</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Finds whether the type of the given variable is integer.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    To test if a variable is a number or a numeric string (such as form
    input, which is always a string), you must use
    <span class="function"><a href="function.is-numeric.php" class="function">is_numeric()</a></span>.
   </p>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.is-int-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable being evaluated.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.is-int-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">value</code> is an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
   <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.is-int-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5653">
    <p><strong>Example #1 <span class="function"><strong>is_int()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$values </span><span style="color: #007700">= array(</span><span style="color: #0000BB">23</span><span style="color: #007700">, </span><span style="color: #DD0000">"23"</span><span style="color: #007700">, </span><span style="color: #0000BB">23.5</span><span style="color: #007700">, </span><span style="color: #DD0000">"23.5"</span><span style="color: #007700">, </span><span style="color: #0000BB">null</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">, </span><span style="color: #0000BB">false</span><span style="color: #007700">);<br />foreach (</span><span style="color: #0000BB">$values </span><span style="color: #007700">as </span><span style="color: #0000BB">$value</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"is_int("</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);<br />    echo </span><span style="color: #DD0000">") = "</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">is_int</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">));<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">is_int(23) = bool(true)
is_int(&#039;23&#039;) = bool(false)
is_int(23.5) = bool(false)
is_int(&#039;23.5&#039;) = bool(false)
is_int(NULL) = bool(false)
is_int(true) = bool(false)
is_int(false) = bool(false)</pre>
</div>
    </div>
   </div>
  </p>
 </div>



 <div class="refsect1 seealso" id="refsect1-function.is-int-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.is-bool.php" class="function" rel="rdfs-seeAlso">is_bool()</a> - Finds out whether a variable is a boolean</span></li>
    <li><span class="function"><a href="function.is-float.php" class="function" rel="rdfs-seeAlso">is_float()</a> - Finds whether the type of a variable is float</span></li>
    <li><span class="function"><a href="function.is-numeric.php" class="function" rel="rdfs-seeAlso">is_numeric()</a> - Finds whether a variable is a number or a numeric string</span></li>
    <li><span class="function"><a href="function.is-string.php" class="function" rel="rdfs-seeAlso">is_string()</a> - Find whether the type of a variable is string</span></li>
    <li><span class="function"><a href="function.is-array.php" class="function" rel="rdfs-seeAlso">is_array()</a> - Finds whether a variable is an array</span></li>
    <li><span class="function"><a href="function.is-object.php" class="function" rel="rdfs-seeAlso">is_object()</a> - Finds whether a variable is an object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/is-int.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.is-int%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.is-int&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-int.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="82857">  <div class="votes">
    <div id="Vu82857">
    <a href="/manual/vote-note.php?id=82857&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82857">
    <a href="/manual/vote-note.php?id=82857&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82857" title="76% like this...">
    172
    </div>
  </div>
  <a href="#82857" class="name">
  <strong class="user"><em>Simon Neaves</em></strong></a><a class="genanchor" href="#82857"> &para;</a><div class="date" title="2008-04-29 11:14"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82857">
<div class="phpcode"><code><span class="html">I've found that both that is_int and ctype_digit don't behave quite as I'd expect, so I made a simple function called isInteger which does. I hope somebody finds it useful.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">){<br />    return(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">strval</span><span class="keyword">(</span><span class="default">$input</span><span class="keyword">)));<br />}<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">23</span><span class="keyword">)); </span><span class="comment">//bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_int</span><span class="keyword">(</span><span class="string">"23"</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">23.5</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">is_int</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">23</span><span class="keyword">)); </span><span class="comment">//bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="string">"23"</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">23.5</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">)); </span><span class="comment">//bool(true)<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">23</span><span class="keyword">)); </span><span class="comment">//bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isInteger</span><span class="keyword">(</span><span class="string">"23"</span><span class="keyword">)); </span><span class="comment">//bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">23.5</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">isInteger</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">)); </span><span class="comment">//bool(false)<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="97006">  <div class="votes">
    <div id="Vu97006">
    <a href="/manual/vote-note.php?id=97006&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97006">
    <a href="/manual/vote-note.php?id=97006&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97006" title="75% like this...">
    33
    </div>
  </div>
  <a href="#97006" class="name">
  <strong class="user"><em>Robin</em></strong></a><a class="genanchor" href="#97006"> &para;</a><div class="date" title="2010-03-27 08:22"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97006">
<div class="phpcode"><code><span class="html">Keep in mind that is_int() operates in signed fashion, not unsigned, and is limited to the word size of the environment php is running in.<br /><br />In a 32-bit environment:<br /><br /><span class="default">&lt;?php<br />is_int</span><span class="keyword">( </span><span class="default">2147483647 </span><span class="keyword">);           </span><span class="comment">// true<br /></span><span class="default">is_int</span><span class="keyword">( </span><span class="default">2147483648 </span><span class="keyword">);           </span><span class="comment">// false<br /></span><span class="default">is_int</span><span class="keyword">( </span><span class="default">9223372036854775807 </span><span class="keyword">);  </span><span class="comment">// false<br /></span><span class="default">is_int</span><span class="keyword">( </span><span class="default">9223372036854775808 </span><span class="keyword">);  </span><span class="comment">// false<br /></span><span class="default">?&gt;<br /></span><br />In a 64-bit environment:<br /><br /><span class="default">&lt;?php<br />is_int</span><span class="keyword">( </span><span class="default">2147483647 </span><span class="keyword">);           </span><span class="comment">// true<br /></span><span class="default">is_int</span><span class="keyword">( </span><span class="default">2147483648 </span><span class="keyword">);           </span><span class="comment">// true<br /></span><span class="default">is_int</span><span class="keyword">( </span><span class="default">9223372036854775807 </span><span class="keyword">);  </span><span class="comment">// true<br /></span><span class="default">is_int</span><span class="keyword">( </span><span class="default">9223372036854775808 </span><span class="keyword">);  </span><span class="comment">// false<br /></span><span class="default">?&gt;<br /></span><br />If you find yourself deployed in a 32-bit environment where you are required to deal with numeric confirmation of integers (and integers only) potentially breaching the 32-bit span, you can combine is_int() with is_float() to guarantee a cover of the full, signed 64-bit span:<br /><br /><span class="default">&lt;?php<br />$small </span><span class="keyword">= </span><span class="default">2147483647</span><span class="keyword">;         </span><span class="comment">// will always be true for is_int(), but never for is_float()<br /></span><span class="default">$big </span><span class="keyword">= </span><span class="default">9223372036854775807</span><span class="keyword">;  </span><span class="comment">// will only be true for is_int() in a 64-bit environment<br /><br /></span><span class="keyword">if( </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$small</span><span class="keyword">) || </span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$small</span><span class="keyword">) );  </span><span class="comment">// passes in a 32-bit environment<br /></span><span class="keyword">if( </span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$big</span><span class="keyword">) || </span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$big</span><span class="keyword">) );      </span><span class="comment">// passes in a 32-bit environment<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="90198">  <div class="votes">
    <div id="Vu90198">
    <a href="/manual/vote-note.php?id=90198&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90198">
    <a href="/manual/vote-note.php?id=90198&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90198" title="73% like this...">
    35
    </div>
  </div>
  <a href="#90198" class="name">
  <strong class="user"><em>e dot sand at elisand dot com</em></strong></a><a class="genanchor" href="#90198"> &para;</a><div class="date" title="2009-04-09 08:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90198">
<div class="phpcode"><code><span class="html">Simon Neaves was close on explaining why his function is perfect choice for testing for an int (as possibly most people would need).  He made some errors on his ctype_digit() output though - possibly a typo, or maybe a bug in his version of PHP at the time.
<br />
<br />The correct output for parts of his examples should be:
<br />
<br /><span class="default">&lt;?php
<br />var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">23</span><span class="keyword">)); </span><span class="comment">//bool(false)
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="string">"23"</span><span class="keyword">)); </span><span class="comment">//bool(true)
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">23.5</span><span class="keyword">)); </span><span class="comment">//bool(false)
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">)); </span><span class="comment">//bool(false)
<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="string">""</span><span class="keyword">)); </span><span class="comment">//bool(false)
<br /></span><span class="default">?&gt;
<br /></span>
<br />As you can see, the reason why using *just* ctype_digit() may not always work is because it only returns TRUE when given a string as input - given a number value and it returns FALSE (which may be unexpected).</span></code></div>
  </div>
 </div>
  <div class="note" id="119646">  <div class="votes">
    <div id="Vu119646">
    <a href="/manual/vote-note.php?id=119646&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119646">
    <a href="/manual/vote-note.php?id=119646&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119646" title="69% like this...">
    5
    </div>
  </div>
  <a href="#119646" class="name">
  <strong class="user"><em>Hector (hector-ordonez.com)</em></strong></a><a class="genanchor" href="#119646"> &para;</a><div class="date" title="2016-07-25 12:00"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119646">
<div class="phpcode"><code><span class="html">Simon Neaves's answer is incomplete: negative integers will return false.<br /><br />I recommend checking stackoverflow's answers:<br /><a href="http://stackoverflow.com/questions/6416763/checking-if-a-variable-is-an-integer-in-php" rel="nofollow" target="_blank">http://stackoverflow.com/questions/6416763/checking-if-a-variable-is-an-integer-in-php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="99098">  <div class="votes">
    <div id="Vu99098">
    <a href="/manual/vote-note.php?id=99098&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99098">
    <a href="/manual/vote-note.php?id=99098&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99098" title="66% like this...">
    16
    </div>
  </div>
  <a href="#99098" class="name">
  <strong class="user"><em>andre dot roesti at 7flex dot net</em></strong></a><a class="genanchor" href="#99098"> &para;</a><div class="date" title="2010-07-27 05:51"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99098">
<div class="phpcode"><code><span class="html">With this function you can check if every of multiple variables are int. This is a little more comfortable than writing 'is_int' for every variable you've got.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">are_int </span><span class="keyword">( ) {<br />    </span><span class="default">$args </span><span class="keyword">= </span><span class="default">func_get_args </span><span class="keyword">();<br />    foreach ( </span><span class="default">$args </span><span class="keyword">as </span><span class="default">$arg </span><span class="keyword">)<br />        if ( ! </span><span class="default">is_int </span><span class="keyword">( </span><span class="default">$arg </span><span class="keyword">) )<br />            return </span><span class="default">false</span><span class="keyword">;<br />    return </span><span class="default">true</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Example:<br /></span><span class="default">are_int </span><span class="keyword">( </span><span class="default">4</span><span class="keyword">, </span><span class="default">9 </span><span class="keyword">); </span><span class="comment">// true<br /></span><span class="default">are_int </span><span class="keyword">( </span><span class="default">22</span><span class="keyword">, </span><span class="default">08</span><span class="keyword">, </span><span class="string">'foo' </span><span class="keyword">); </span><span class="comment">// false<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118502">  <div class="votes">
    <div id="Vu118502">
    <a href="/manual/vote-note.php?id=118502&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118502">
    <a href="/manual/vote-note.php?id=118502&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118502" title="63% like this...">
    9
    </div>
  </div>
  <a href="#118502" class="name">
  <strong class="user"><em>davide dot renzi at gmail dot com</em></strong></a><a class="genanchor" href="#118502"> &para;</a><div class="date" title="2015-12-16 12:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118502">
<div class="phpcode"><code><span class="html">I've found a faster way of determining an integer.<br />On my env, this method takes about half the time of using is_int(). <br /><br />Cast the value then check if it is identical to the original. <br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">if ( (int) </span><span class="default">$n </span><span class="keyword">!== </span><span class="default">$n </span><span class="keyword">) { <br />    echo </span><span class="string">'not is int'</span><span class="keyword">; <br />} else { <br />    echo </span><span class="string">'is int'</span><span class="keyword">; <br />} <br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109443">  <div class="votes">
    <div id="Vu109443">
    <a href="/manual/vote-note.php?id=109443&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109443">
    <a href="/manual/vote-note.php?id=109443&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109443" title="61% like this...">
    6
    </div>
  </div>
  <a href="#109443" class="name">
  <strong class="user"><em>petepostma at gmail dot spam dot com</em></strong></a><a class="genanchor" href="#109443"> &para;</a><div class="date" title="2012-07-17 06:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109443">
<div class="phpcode"><code><span class="html">There is a versa to the vice of this int only type check.<br /><br />is_int( $integer_type) will only return true, if the TYPE is int, not the value<br />ctype_digit( $string_type) will only return true if the TYPE is string, and its value is INT<br /><br />therefore:<br /> return ( is_int($value) || ctype_digit($value) );</span></code></div>
  </div>
 </div>
  <div class="note" id="109217">  <div class="votes">
    <div id="Vu109217">
    <a href="/manual/vote-note.php?id=109217&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109217">
    <a href="/manual/vote-note.php?id=109217&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109217" title="57% like this...">
    8
    </div>
  </div>
  <a href="#109217" class="name">
  <strong class="user"><em>nicolas dot giraud at actiane dot com</em></strong></a><a class="genanchor" href="#109217"> &para;</a><div class="date" title="2012-06-27 09:24"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109217">
<div class="phpcode"><code><span class="html">Just a shorter way to check if your variable is an int or a string containing a int without others digit than 0 to 9 :<br /><br /><span class="default">&lt;?php <br />$bool </span><span class="keyword">= ( !</span><span class="default">is_int</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? (</span><span class="default">ctype_digit</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">)) : </span><span class="default">true </span><span class="keyword">);<br /><br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">42</span><span class="keyword">; </span><span class="comment">//true<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">'42'</span><span class="keyword">; </span><span class="comment">//true<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">'1e9'</span><span class="keyword">; </span><span class="comment">//false<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">'0155'</span><span class="keyword">; </span><span class="comment">//true<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">0155</span><span class="keyword">; </span><span class="comment">//true<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">0xFF</span><span class="keyword">; </span><span class="comment">//true while it's just the same as 255<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">'0xFF'</span><span class="keyword">; </span><span class="comment">//false<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">; </span><span class="comment">//false<br /></span><span class="default">$value </span><span class="keyword">= array(); </span><span class="comment">//false<br /></span><span class="default">$value </span><span class="keyword">= array(</span><span class="string">'5'</span><span class="keyword">); </span><span class="comment">//false<br /></span><span class="default">$value </span><span class="keyword">= array(</span><span class="default">5</span><span class="keyword">); </span><span class="default">false<br />$value </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">; </span><span class="comment">//false<br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">; </span><span class="comment">//false<br /><br /></span><span class="default">?&gt;<br /></span><br />Short &amp; cool :)</span></code></div>
  </div>
 </div>
  <div class="note" id="34038">  <div class="votes">
    <div id="Vu34038">
    <a href="/manual/vote-note.php?id=34038&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34038">
    <a href="/manual/vote-note.php?id=34038&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34038" title="57% like this...">
    2
    </div>
  </div>
  <a href="#34038" class="name">
  <strong class="user"><em>gabe at websaviour dot com</em></strong></a><a class="genanchor" href="#34038"> &para;</a><div class="date" title="2003-07-14 11:08"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34038">
<div class="phpcode"><code><span class="html">Although this can be inferred from the documentation, beware of numeric strings.  I ran into the problem in a MySQL app where I would either SELECT an INT PRIMARY KEY or INSERT a new record and use mysql_insert_id() to get the KEY before continuing onto the new section.  <br /><br />I used is_int() to make sure the subsequent queries wouldn't break when using the key variable.  Unfortunately I failed to realize that while mysql_insert_id() returns an int, mysql_result() always returns a string even if you are SELECTing from an INT field.<br /><br />Spent at least 30 minutes trying to figure out why existing records weren't getting linked, but new records would link fine.  I ended up using intval() on mysql_result() to make sure subsequent queries still always work.</span></code></div>
  </div>
 </div>
  <div class="note" id="119138">  <div class="votes">
    <div id="Vu119138">
    <a href="/manual/vote-note.php?id=119138&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119138">
    <a href="/manual/vote-note.php?id=119138&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119138" title="53% like this...">
    1
    </div>
  </div>
  <a href="#119138" class="name">
  <strong class="user"><em>Vasiliy Makogon</em></strong></a><a class="genanchor" href="#119138"> &para;</a><div class="date" title="2016-04-08 10:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119138">
<div class="phpcode"><code><span class="html">If you want detect integer of float values, which presents as pure int or float, and presents as string values, use this functions:<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />{<br />    if (!</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) || </span><span class="default">is_bool</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    if (</span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$val </span><span class="keyword">+ </span><span class="default">0</span><span class="keyword">) &amp;&amp; (</span><span class="default">$val </span><span class="keyword">+ </span><span class="default">0</span><span class="keyword">) &gt; </span><span class="default">PHP_INT_MAX</span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) ? </span><span class="default">false </span><span class="keyword">: </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'~^((:?+|-)?[0-9]+)$~'</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">isFloat</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)<br />{<br />    if (!</span><span class="default">is_scalar</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    }<br />    return </span><span class="default">is_float</span><span class="keyword">(</span><span class="default">$val </span><span class="keyword">+ </span><span class="default">0</span><span class="keyword">);<br />}<br /><br />foreach ([<br />    </span><span class="string">'11111111111111111'</span><span class="keyword">, </span><span class="default">11111111111111111</span><span class="keyword">, </span><span class="comment">// &gt; PHP_INT_MAX - presents in PHP as float <br />    </span><span class="default">1</span><span class="keyword">, </span><span class="string">'10'</span><span class="keyword">, </span><span class="string">'+1'</span><span class="keyword">, </span><span class="string">'1.1'</span><span class="keyword">, </span><span class="default">1.1</span><span class="keyword">, </span><span class="default">.2</span><span class="keyword">, </span><span class="default">2.</span><span class="keyword">, </span><span class="string">'.2'</span><span class="keyword">, </span><span class="string">'2.'</span><span class="keyword">, <br />    </span><span class="string">'-2.'</span><span class="keyword">, </span><span class="string">'-.2'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, [], </span><span class="default">true</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">'string'<br /></span><span class="keyword">] as </span><span class="default">$value</span><span class="keyword">) {<br />    echo </span><span class="default">$value </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) . </span><span class="string">' is Integer? - '  </span><span class="keyword">. (</span><span class="default">isInteger</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    echo </span><span class="default">$value </span><span class="keyword">. </span><span class="string">':' </span><span class="keyword">. </span><span class="default">gettype</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) . </span><span class="string">' is Float? - '  </span><span class="keyword">. (</span><span class="default">isFloat</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">) ? </span><span class="string">'yes' </span><span class="keyword">: </span><span class="string">'no'</span><span class="keyword">) . </span><span class="default">PHP_EOL</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="93560">  <div class="votes">
    <div id="Vu93560">
    <a href="/manual/vote-note.php?id=93560&amp;page=function.is-int&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93560">
    <a href="/manual/vote-note.php?id=93560&amp;page=function.is-int&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93560" title="53% like this...">
    1
    </div>
  </div>
  <a href="#93560" class="name">
  <strong class="user"><em>me at rexxars dot com</em></strong></a><a class="genanchor" href="#93560"> &para;</a><div class="date" title="2009-09-16 05:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93560">
<div class="phpcode"><code><span class="html">I was looking for the fastest way to check for an unsigned integer which supported large numbers like 4318943448871348 or 0xFFFFFFFF.<br /><br />Fastest I came up with is this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">is_unsigned_int</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) {<br />    return </span><span class="default">ctype_digit</span><span class="keyword">((string) </span><span class="default">$value</span><span class="keyword">));<br />}<br /></span><span class="default">?&gt;<br /></span><br />Will return true on 1515, 0xFFFFFFFF, '3515' and '1365158185855141'.<br />Will return false on 0.1515, '415.4134' and '-616'.<br /><br />Be aware though, before PHP 5.1.0 this will return true on an empty string.<br /><br />According to my benchmarks this is about 30% faster than the regex ^\d+$.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.is-int&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.is-int.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="current">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
