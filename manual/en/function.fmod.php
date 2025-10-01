<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: fmod - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.fmod.php">
 <link rel="shorturl" href="https://www.php.net/fmod">
 <link rel="alternate" href="https://www.php.net/fmod" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.floor.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fpow.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.fmod.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.fmod.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.fmod.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.fmod.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.fmod.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.fmod.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.fmod.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.fmod.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.fmod.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.fmod.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.fmod.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Returns the floating point remainder (modulo) of the division
  of the arguments" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: fmod - Manual" />
<meta name="twitter:description" content="Returns the floating point remainder (modulo) of the division
  of the arguments" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: fmod - Manual" />
<meta itemprop="description" content="Returns the floating point remainder (modulo) of the division
  of the arguments" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Returns the floating point remainder (modulo) of the division
  of the arguments" />

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
        <a href="function.fpow.php">
          fpow &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.floor.php">
          &laquo; floor        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      <li><a href='book.math.php'>Math</a></li>      <li><a href='ref.math.php'>Math Functions</a></li>      </ul>
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
            <option value='en/function.fmod.php' selected="selected">English</option>
            <option value='de/function.fmod.php'>German</option>
            <option value='es/function.fmod.php'>Spanish</option>
            <option value='fr/function.fmod.php'>French</option>
            <option value='it/function.fmod.php'>Italian</option>
            <option value='ja/function.fmod.php'>Japanese</option>
            <option value='pt_BR/function.fmod.php'>Brazilian Portuguese</option>
            <option value='ru/function.fmod.php'>Russian</option>
            <option value='tr/function.fmod.php'>Turkish</option>
            <option value='uk/function.fmod.php'>Ukrainian</option>
            <option value='zh/function.fmod.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.fmod" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">fmod</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">fmod</span> &mdash; <span class="dc-title">Returns the floating point remainder (modulo) of the division
  of the arguments</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.fmod-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>fmod</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$num1</code></span>, <span class="methodparam"><span class="type"><a href="language.types.float.php" class="type float">float</a></span> <code class="parameter">$num2</code></span>): <span class="type"><a href="language.types.float.php" class="type float">float</a></span></div>

  <p class="para rdfs-comment">
   Returns the floating point remainder of dividing the dividend
   (<code class="parameter">num1</code>) by the divisor (<code class="parameter">num2</code>).
   The remainder (<var class="varname">r</var>) is defined as: num1 = i * num2 + r, for 
   some integer <var class="varname">i</var>. If <code class="parameter">num2</code> is
   non-zero, <var class="varname">r</var> has the same sign as
   <code class="parameter">num1</code> and a magnitude less than the magnitude of
   <code class="parameter">num2</code>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.fmod-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">num1</code></dt>
     <dd>
      <p class="para">
       The dividend
      </p>
     </dd>
    
    
     <dt><code class="parameter">num2</code></dt>
     <dd>
      <p class="para">
       The divisor
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.fmod-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The floating point remainder of 
   <code class="parameter">num1</code>/<code class="parameter">num2</code>
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-function.fmod-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3373">
    <p><strong>Example #1 Using <span class="function"><strong>fmod()</strong></span></strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$x </span><span style="color: #007700">= </span><span style="color: #0000BB">5.7</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$y </span><span style="color: #007700">= </span><span style="color: #0000BB">1.3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$r </span><span style="color: #007700">= </span><span style="color: #0000BB">fmod</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// $r equals 0.5, because 4 * 1.3 + 0.5 = 5.7<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$x</span><span style="color: #007700">, </span><span style="color: #0000BB">$y</span><span style="color: #007700">, </span><span style="color: #0000BB">$r</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.fmod-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.operators.arithmetic.php" class="link"><code class="literal">/</code></a> - Floating-point division</li>
    <li><a href="language.operators.arithmetic.php" class="link"><code class="literal">%</code></a> - Integer modulus</li>
    <li><span class="function"><a href="function.intdiv.php" class="function" rel="rdfs-seeAlso">intdiv()</a> - Integer division</span> - Integer division</li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/math/functions/fmod.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.fmod%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.fmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fmod.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120410">  <div class="votes">
    <div id="Vu120410">
    <a href="/manual/vote-note.php?id=120410&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120410">
    <a href="/manual/vote-note.php?id=120410&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120410" title="100% like this...">
    4
    </div>
  </div>
  <a href="#120410" class="name">
  <strong class="user"><em>nospam at neonit dot de</em></strong></a><a class="genanchor" href="#120410"> &para;</a><div class="date" title="2017-01-04 10:11"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120410">
<div class="phpcode"><code><span class="html">Note that fmod does not behave like a similar function written in PHP itself does due to the lack of fixing floating point representation errors.<br /><br />Have a look at this:<br /><span class="default">&lt;?php<br />var_dump</span><span class="keyword">(</span><span class="default">10 </span><span class="keyword">/ (</span><span class="default">10 </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">) === </span><span class="default">3.0</span><span class="keyword">); </span><span class="comment">// bool(true)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">fmod</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">)); </span><span class="comment">// float(3.3333333333333)<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">fmod</span><span class="keyword">(</span><span class="default">10</span><span class="keyword">, </span><span class="default">10 </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">) &lt; </span><span class="default">10 </span><span class="keyword">/ </span><span class="default">3</span><span class="keyword">); </span><span class="comment">// bool(true)<br /></span><span class="default">?&gt;<br /></span><br />Internally there is no way of exactly representing the result of 10 / 3, so it will always be a bit above or below the actual result. In this case, the example proves it being a bit above the actual result.<br /><br />PHP seems quite good at auto-fixing floating point representation errors so they behave like the user would expect it. That's why the first line yields true, although the result is slightly below 3 (like 2.9999999999[something]). I failed to trick PHP into rounding or cropping the result to 2.<br /><br />However, fmod seems to not apply these fixes during calculations. From 10 / 3 it gets a value slightly below 3, floors it to 2 and returns 10 - 2 * 10 / 3, which is slightly less than the actual result of 10 / 3, but looks like 10 / 3 (third line).<br /><br />Unfortunately, this is not the expected result. See other notes for high quality fixes.</span></code></div>
  </div>
 </div>
  <div class="note" id="48881">  <div class="votes">
    <div id="Vu48881">
    <a href="/manual/vote-note.php?id=48881&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48881">
    <a href="/manual/vote-note.php?id=48881&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48881" title="63% like this...">
    11
    </div>
  </div>
  <a href="#48881" class="name">
  <strong class="user"><em>jphansen at uga dot edu</em></strong></a><a class="genanchor" href="#48881"> &para;</a><div class="date" title="2005-01-10 11:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48881">
<div class="phpcode"><code><span class="html">fmod() does not mirror a calculator's mod function. For example, fmod(.25, .05) will return .05 instead of 0 due to floor(). Using the aforementioned example, you may get 0 by replacing floor() with round() in a custom fmod().<br /><br />&lt;?<br />function fmod_round($x, $y) {<br />    $i = round($x / $y);<br />    return $x - $i * $y;<br />}<br /><br />var_dump(fmod(.25, .05)); // float(0.05)<br />var_dump(fmod_round(.25, .05)); // float(0)<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="59530">  <div class="votes">
    <div id="Vu59530">
    <a href="/manual/vote-note.php?id=59530&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59530">
    <a href="/manual/vote-note.php?id=59530&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59530" title="55% like this...">
    5
    </div>
  </div>
  <a href="#59530" class="name">
  <strong class="user"><em>cory at lavacube dot net</em></strong></a><a class="genanchor" href="#59530"> &para;</a><div class="date" title="2005-12-08 10:13"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59530">
<div class="phpcode"><code><span class="html">I don't believe that is correct.<br /><br />Try this out using your patch:<br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">echo </span><span class="default">duration</span><span class="keyword">( </span><span class="default">mktime</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">2006</span><span class="keyword">)-</span><span class="default">time</span><span class="keyword">() );<br /><br /></span><span class="default">?&gt;<br /></span><br />As of right now, this will read:<br />1 month, 22 days, 24 hours, 49 minutes, 15 seconds<br /><br />Which is completely incorrect. Seeing as how it is the 9th of December.<br /><br />The real real flaw here is how the 'year' and 'month' periods are calculated. As most months vary in length...<br /><br />Thank you very much SnakeEater251 for pointing this out.<br /><br />The quickest way to get slightly more accurate results, is to use averages based on one "true" year, which is 365.25 days.<br /><br />Change the year and month to:<br />      'year'       =&gt; 31557600, // one 'true year' (365.25 days)<br />      'month'    =&gt; 2629800, // one 'true year' divided by 12 :-)<br /><br />I will work on developing a true fix, for pin-point accuracy. ;-)<br /><br /> - Cory Christison</span></code></div>
  </div>
 </div>
  <div class="note" id="96131">  <div class="votes">
    <div id="Vu96131">
    <a href="/manual/vote-note.php?id=96131&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96131">
    <a href="/manual/vote-note.php?id=96131&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96131" title="61% like this...">
    3
    </div>
  </div>
  <a href="#96131" class="name">
  <strong class="user"><em>dePijd</em></strong></a><a class="genanchor" href="#96131"> &para;</a><div class="date" title="2010-02-10 06:37"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96131">
<div class="phpcode"><code><span class="html">This class ran through several unit tests and fixes all failures found in bugs.php.net<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">abstract class </span><span class="default">MyNumber </span><span class="keyword">{<br />    public static function </span><span class="default">isZero</span><span class="keyword">(</span><span class="default">$number</span><span class="keyword">, </span><span class="default">$precision </span><span class="keyword">= </span><span class="default">0.0000000001</span><span class="keyword">)<br />    {<br />        </span><span class="default">$precision </span><span class="keyword">= </span><span class="default">abs</span><span class="keyword">(</span><span class="default">$precision</span><span class="keyword">);<br />        return -</span><span class="default">$precision </span><span class="keyword">&lt; (float)</span><span class="default">$number </span><span class="keyword">&amp;&amp; (float)</span><span class="default">$number </span><span class="keyword">&lt; </span><span class="default">$precision</span><span class="keyword">;<br />    }<br />    public static function </span><span class="default">isEqual</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">, </span><span class="default">$number2</span><span class="keyword">)<br />    {<br />        return </span><span class="default">self</span><span class="keyword">::</span><span class="default">isZero</span><span class="keyword">(</span><span class="default">$number1 </span><span class="keyword">- </span><span class="default">$number2</span><span class="keyword">);<br />    }<br />    public static function </span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">, </span><span class="default">$number2</span><span class="keyword">)<br />    {<br />        </span><span class="default">$rest </span><span class="keyword">= </span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">, </span><span class="default">$number2</span><span class="keyword">);<br />        if (</span><span class="default">self</span><span class="keyword">::</span><span class="default">isEqual</span><span class="keyword">(</span><span class="default">$rest</span><span class="keyword">, </span><span class="default">$number2</span><span class="keyword">)) {<br />            return </span><span class="default">0.0</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$decimals1 </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$decimals1 </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">) - </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$number1</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />        }<br />        if (</span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$number2</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">) === </span><span class="default">false</span><span class="keyword">) {<br />            </span><span class="default">$decimals2 </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        } else {<br />            </span><span class="default">$decimals2 </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$number2</span><span class="keyword">) - </span><span class="default">mb_strpos</span><span class="keyword">(</span><span class="default">$number2</span><span class="keyword">, </span><span class="string">"."</span><span class="keyword">) - </span><span class="default">1</span><span class="keyword">;<br />        }<br />        return (float)</span><span class="default">round</span><span class="keyword">(</span><span class="default">$rest</span><span class="keyword">, </span><span class="default">max</span><span class="keyword">(</span><span class="default">$decimals1</span><span class="keyword">, </span><span class="default">$decimals2</span><span class="keyword">));<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122782">  <div class="votes">
    <div id="Vu122782">
    <a href="/manual/vote-note.php?id=122782&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122782">
    <a href="/manual/vote-note.php?id=122782&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122782" title="58% like this...">
    2
    </div>
  </div>
  <a href="#122782" class="name">
  <strong class="user"><em>dan  danschafer  net</em></strong></a><a class="genanchor" href="#122782"> &para;</a><div class="date" title="2018-05-30 03:26"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122782">
<div class="phpcode"><code><span class="html">WARNING: Due to how floating point numbers work, fmod() and any simple alternatives are problematic when there is either a massive orders of magnitude different between the input $x and $y, or the input and output values. If you need to work with large numbers or arbitrary precision, it is best to work with something like BC Math or GMP.<br /><br />When working around fmod()'s problems, remember that floor() always goes towards -INF, not 0. This causes a commonly proposed fmod() alternative to only work with positive numbers:<br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">fmod_positive_only</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) {<br />    return </span><span class="default">$x </span><span class="keyword">- </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">$y</span><span class="keyword">) * </span><span class="default">$y</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>Given these simplistic input values:<br />fmod_positive_only(-5, 3) = 1 (wrong)<br />-5 % 3 = -2 (correct)<br /><br />Correctly removing the decimal part of the quotient can be achieved with either casting to an int (always goes towards zero) or dynamically choosing ceil() or floor(). Dynamically choosing floor or ceil in an attempt to keep precision is overkill. If your $x and $y values are so different that it suffers from an overflow problem when casting, it was probably going to have precision problems anyway (see warnings below).<br /><br /><span class="default">&lt;?php <br /></span><span class="keyword">function </span><span class="default">fmod_overkill</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) {<br />    if (!</span><span class="default">$y</span><span class="keyword">) { return </span><span class="default">NAN</span><span class="keyword">; }<br />    </span><span class="default">$q </span><span class="keyword">= </span><span class="default">$x </span><span class="keyword">/ </span><span class="default">$y</span><span class="keyword">;<br />    </span><span class="default">$f </span><span class="keyword">= (</span><span class="default">$q </span><span class="keyword">&lt; </span><span class="default">0 </span><span class="keyword">? </span><span class="string">'ceil' </span><span class="keyword">: </span><span class="string">'floor'</span><span class="keyword">);<br />    return </span><span class="default">$x </span><span class="keyword">- </span><span class="default">$f</span><span class="keyword">(</span><span class="default">$q</span><span class="keyword">) * </span><span class="default">$y</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />This is the "best" alternative for fmod() when given "normal" numbers.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">fmod_alt</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">$y</span><span class="keyword">) {<br />    if (!</span><span class="default">$y</span><span class="keyword">) { return </span><span class="default">NAN</span><span class="keyword">; }<br />    return </span><span class="default">floatval</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">- </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$x </span><span class="keyword">/ </span><span class="default">$y</span><span class="keyword">) * </span><span class="default">$y</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />WARNING: Even when you get a non-zero response, know your input numbers and when fmod() can go wrong. For large values or depending on your input variable types, float still may not contain enough precision to get back the correct answer. Here are a few problems with fmod() and their alternatives.<br /><br />PHP_INT_MAX = 9223372036854775807<br />fmod(PHP_INT_MAX, 2) = 0 (wrong)<br />fmod_alt(PHP_INT_MAX, 2) = 0 (wrong)<br />PHP_INT_MAX % 2 = 1 (correct)<br /><br />fmod(PHP_INT_MAX, PHP_INT_MAX - 1) = 0 (wrong)<br />fmod_alt(PHP_INT_MAX, PHP_INT_MAX - 1) = 1 (correct)<br />fmod_alt(PHP_INT_MAX, PHP_INT_MAX - 1.0) = 0 (wrong)<br />PHP_INT_MAX % (PHP_INT_MAX - 1) = 1 (correct)<br />PHP_INT_MAX % (PHP_INT_MAX - 1.0) = 9223372036854775807 (wrong)<br /><br />fmod(PHP_INT_MAX, 131) =  98 (wrong)<br />fmod_alt(PHP_INT_MAX, 131) = 359 (wrong)<br />fmod_positive_only(PHP_INT_MAX, 131) = 0 (wrong)<br />PHP_INT_MAX % 131 = 97 (correct)</span></code></div>
  </div>
 </div>
  <div class="note" id="39946">  <div class="votes">
    <div id="Vu39946">
    <a href="/manual/vote-note.php?id=39946&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd39946">
    <a href="/manual/vote-note.php?id=39946&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V39946" title="56% like this...">
    3
    </div>
  </div>
  <a href="#39946" class="name">
  <strong class="user"><em>alex at xelam dot net</em></strong></a><a class="genanchor" href="#39946"> &para;</a><div class="date" title="2004-02-16 01:19"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom39946">
<div class="phpcode"><code><span class="html">Integer Modulo<br /><br />If you want the remainder of the division of two Integers rather than Floats, use "%"; eg:<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="default">4</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="default">3</span><span class="keyword">;<br /><br />print(</span><span class="default">$a </span><span class="keyword">% </span><span class="default">$b</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Will output "1".</span></code></div>
  </div>
 </div>
  <div class="note" id="30182">  <div class="votes">
    <div id="Vu30182">
    <a href="/manual/vote-note.php?id=30182&amp;page=function.fmod&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30182">
    <a href="/manual/vote-note.php?id=30182&amp;page=function.fmod&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30182" title="55% like this...">
    2
    </div>
  </div>
  <a href="#30182" class="name">
  <strong class="user"><em>picaune at hotmail dot com</em></strong></a><a class="genanchor" href="#30182"> &para;</a><div class="date" title="2003-03-09 03:57"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30182">
<div class="phpcode"><code><span class="html">NAN (.net Equivalent = Double.NaN) means "Not-a-Number".<br />Some ways to get NaN are modulo 0, and square root of 0.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.fmod&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.fmod.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.math.php">Math Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.abs.php" title="abs">abs</a>
                        </li>
                                                <li class="">
                            <a href="function.acos.php" title="acos">acos</a>
                        </li>
                                                <li class="">
                            <a href="function.acosh.php" title="acosh">acosh</a>
                        </li>
                                                <li class="">
                            <a href="function.asin.php" title="asin">asin</a>
                        </li>
                                                <li class="">
                            <a href="function.asinh.php" title="asinh">asinh</a>
                        </li>
                                                <li class="">
                            <a href="function.atan.php" title="atan">atan</a>
                        </li>
                                                <li class="">
                            <a href="function.atan2.php" title="atan2">atan2</a>
                        </li>
                                                <li class="">
                            <a href="function.atanh.php" title="atanh">atanh</a>
                        </li>
                                                <li class="">
                            <a href="function.base-convert.php" title="base_&#8203;convert">base_&#8203;convert</a>
                        </li>
                                                <li class="">
                            <a href="function.bindec.php" title="bindec">bindec</a>
                        </li>
                                                <li class="">
                            <a href="function.ceil.php" title="ceil">ceil</a>
                        </li>
                                                <li class="">
                            <a href="function.cos.php" title="cos">cos</a>
                        </li>
                                                <li class="">
                            <a href="function.cosh.php" title="cosh">cosh</a>
                        </li>
                                                <li class="">
                            <a href="function.decbin.php" title="decbin">decbin</a>
                        </li>
                                                <li class="">
                            <a href="function.dechex.php" title="dechex">dechex</a>
                        </li>
                                                <li class="">
                            <a href="function.decoct.php" title="decoct">decoct</a>
                        </li>
                                                <li class="">
                            <a href="function.deg2rad.php" title="deg2rad">deg2rad</a>
                        </li>
                                                <li class="">
                            <a href="function.exp.php" title="exp">exp</a>
                        </li>
                                                <li class="">
                            <a href="function.expm1.php" title="expm1">expm1</a>
                        </li>
                                                <li class="">
                            <a href="function.fdiv.php" title="fdiv">fdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.floor.php" title="floor">floor</a>
                        </li>
                                                <li class="current">
                            <a href="function.fmod.php" title="fmod">fmod</a>
                        </li>
                                                <li class="">
                            <a href="function.fpow.php" title="fpow">fpow</a>
                        </li>
                                                <li class="">
                            <a href="function.hexdec.php" title="hexdec">hexdec</a>
                        </li>
                                                <li class="">
                            <a href="function.hypot.php" title="hypot">hypot</a>
                        </li>
                                                <li class="">
                            <a href="function.intdiv.php" title="intdiv">intdiv</a>
                        </li>
                                                <li class="">
                            <a href="function.is-finite.php" title="is_&#8203;finite">is_&#8203;finite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-infinite.php" title="is_&#8203;infinite">is_&#8203;infinite</a>
                        </li>
                                                <li class="">
                            <a href="function.is-nan.php" title="is_&#8203;nan">is_&#8203;nan</a>
                        </li>
                                                <li class="">
                            <a href="function.log.php" title="log">log</a>
                        </li>
                                                <li class="">
                            <a href="function.log10.php" title="log10">log10</a>
                        </li>
                                                <li class="">
                            <a href="function.log1p.php" title="log1p">log1p</a>
                        </li>
                                                <li class="">
                            <a href="function.max.php" title="max">max</a>
                        </li>
                                                <li class="">
                            <a href="function.min.php" title="min">min</a>
                        </li>
                                                <li class="">
                            <a href="function.octdec.php" title="octdec">octdec</a>
                        </li>
                                                <li class="">
                            <a href="function.pi.php" title="pi">pi</a>
                        </li>
                                                <li class="">
                            <a href="function.pow.php" title="pow">pow</a>
                        </li>
                                                <li class="">
                            <a href="function.rad2deg.php" title="rad2deg">rad2deg</a>
                        </li>
                                                <li class="">
                            <a href="function.round.php" title="round">round</a>
                        </li>
                                                <li class="">
                            <a href="function.sin.php" title="sin">sin</a>
                        </li>
                                                <li class="">
                            <a href="function.sinh.php" title="sinh">sinh</a>
                        </li>
                                                <li class="">
                            <a href="function.sqrt.php" title="sqrt">sqrt</a>
                        </li>
                                                <li class="">
                            <a href="function.tan.php" title="tan">tan</a>
                        </li>
                                                <li class="">
                            <a href="function.tanh.php" title="tanh">tanh</a>
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
