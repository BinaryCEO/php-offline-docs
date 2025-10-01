<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: boolval - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.boolval.php">
 <link rel="shorturl" href="https://www.php.net/boolval">
 <link rel="alternate" href="https://www.php.net/boolval" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="next" href="https://www.php.net/manual/en/function.debug-zval-dump.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.boolval.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.boolval.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.boolval.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.boolval.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.boolval.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.boolval.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.boolval.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.boolval.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.boolval.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.boolval.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.boolval.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get the boolean value of a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: boolval - Manual" />
<meta name="twitter:description" content="Get the boolean value of a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: boolval - Manual" />
<meta itemprop="description" content="Get the boolean value of a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get the boolean value of a variable" />

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
        <a href="function.debug-zval-dump.php">
          debug_zval_dump &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.var.php">
          &laquo; Variable handling Functions        </a>
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
            <option value='en/function.boolval.php' selected="selected">English</option>
            <option value='de/function.boolval.php'>German</option>
            <option value='es/function.boolval.php'>Spanish</option>
            <option value='fr/function.boolval.php'>French</option>
            <option value='it/function.boolval.php'>Italian</option>
            <option value='ja/function.boolval.php'>Japanese</option>
            <option value='pt_BR/function.boolval.php'>Brazilian Portuguese</option>
            <option value='ru/function.boolval.php'>Russian</option>
            <option value='tr/function.boolval.php'>Turkish</option>
            <option value='uk/function.boolval.php'>Ukrainian</option>
            <option value='zh/function.boolval.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.boolval" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">boolval</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">boolval</span> &mdash; <span class="dc-title">Get the boolean value of a variable</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.boolval-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>boolval</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Returns the <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> value of <code class="parameter">value</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.boolval-parameters">
  <h3 class="title">Parameters</h3>
  <dl>
   
    <dt><code class="parameter">value</code></dt>
    <dd>
     <p class="para">
      The scalar value being converted to a <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>.
     </p>
    </dd>
   
  </dl>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.boolval-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> value of <code class="parameter">value</code>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.boolval-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5633">
    <p><strong>Example #1 <span class="function"><strong>boolval()</strong></span> examples</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">'0:        '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'42:       '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #0000BB">42</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'0.0:      '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #0000BB">0.0</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'4.2:      '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #0000BB">4.2</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'"":       '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'"string": '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #DD0000">"string"</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'"0":      '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #DD0000">"0"</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'"1":      '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(</span><span style="color: #DD0000">"1"</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'[1, 2]:   '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">([</span><span style="color: #0000BB">1</span><span style="color: #007700">, </span><span style="color: #0000BB">2</span><span style="color: #007700">]) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'[]:       '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">([]) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">'stdClass: '</span><span style="color: #007700">.(</span><span style="color: #0000BB">boolval</span><span style="color: #007700">(new </span><span style="color: #0000BB">stdClass</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'true' </span><span style="color: #007700">: </span><span style="color: #DD0000">'false'</span><span style="color: #007700">).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">0:        false
42:       true
0.0:      false
4.2:      true
&quot;&quot;:       false
&quot;string&quot;: true
&quot;0&quot;:      false
&quot;1&quot;:      true
[1, 2]:   true
[]:       false
stdClass: true</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.boolval-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.floatval.php" class="function" rel="rdfs-seeAlso">floatval()</a> - Get float value of a variable</span></li>
    <li><span class="function"><a href="function.intval.php" class="function" rel="rdfs-seeAlso">intval()</a> - Get the integer value of a variable</span></li>
    <li><span class="function"><a href="function.strval.php" class="function" rel="rdfs-seeAlso">strval()</a> - Get string value of a variable</span></li>
    <li><span class="function"><a href="function.settype.php" class="function" rel="rdfs-seeAlso">settype()</a> - Set the type of a variable</span></li>
    <li><span class="function"><a href="function.is-bool.php" class="function" rel="rdfs-seeAlso">is_bool()</a> - Finds out whether a variable is a boolean</span></li>
    <li><a href="language.types.type-juggling.php" class="link">Type juggling</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/boolval.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.boolval%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.boolval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.boolval.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="116477">  <div class="votes">
    <div id="Vu116477">
    <a href="/manual/vote-note.php?id=116477&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116477">
    <a href="/manual/vote-note.php?id=116477&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116477" title="82% like this...">
    59
    </div>
  </div>
  <a href="#116477" class="name">
  <strong class="user"><em>Matt M</em></strong></a><a class="genanchor" href="#116477"> &para;</a><div class="date" title="2015-01-09 05:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116477">
<div class="phpcode"><code><span class="html">To anyone like me who came here looking for a way to turn any value into a 0/1 that will fit into a MySQL boolean (tinyint) field:<br /><br /><span class="default">&lt;?php<br />$tinyint </span><span class="keyword">= (int) </span><span class="default">filter_var</span><span class="keyword">(</span><span class="default">$valToCheck</span><span class="keyword">, </span><span class="default">FILTER_VALIDATE_BOOLEAN</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />tinyint will be 0 (zero) for values like string "false", boolean false, int 0<br /><br />tinyint will be 1 for values like string "true", boolean true, int 1<br /><br />Useful if you are accepting data that might be from a language like Javascript that sends string "false" for a boolean false.</span></code></div>
  </div>
 </div>
  <div class="note" id="125943">  <div class="votes">
    <div id="Vu125943">
    <a href="/manual/vote-note.php?id=125943&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125943">
    <a href="/manual/vote-note.php?id=125943&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125943" title="75% like this...">
    53
    </div>
  </div>
  <a href="#125943" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#125943"> &para;</a><div class="date" title="2021-03-18 11:39"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125943">
<div class="phpcode"><code><span class="html">boolval('false') returns true.<br />boolval('False') return true.</span></code></div>
  </div>
 </div>
  <div class="note" id="111674">  <div class="votes">
    <div id="Vu111674">
    <a href="/manual/vote-note.php?id=111674&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111674">
    <a href="/manual/vote-note.php?id=111674&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111674" title="69% like this...">
    54
    </div>
  </div>
  <a href="#111674" class="name">
  <strong class="user"><em>info at lomalkin dot ru</em></strong></a><a class="genanchor" href="#111674"> &para;</a><div class="date" title="2013-03-15 11:08"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111674">
<div class="phpcode"><code><span class="html">&lt;?<br /><br />// Hack for old php versions to use boolval()<br /><br />if (!function_exists('boolval')) {<br />        function boolval($val) {<br />                return (bool) $val;<br />        }<br />}<br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="116547">  <div class="votes">
    <div id="Vu116547">
    <a href="/manual/vote-note.php?id=116547&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116547">
    <a href="/manual/vote-note.php?id=116547&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116547" title="69% like this...">
    25
    </div>
  </div>
  <a href="#116547" class="name">
  <strong class="user"><em>raphael.satyago</em></strong></a><a class="genanchor" href="#116547"> &para;</a><div class="date" title="2015-01-20 09:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116547">
<div class="phpcode"><code><span class="html">function is_true($val, $return_null=false){<br />    $boolval = ( is_string($val) ? filter_var($val, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) : (bool) $val );<br />    return ( $boolval===null &amp;&amp; !$return_null ? false : $boolval );<br />}<br /><br />// Return Values:<br /><br />is_true(new stdClass);      // true<br />is_true([1,2]);             // true<br />is_true([1]);               // true<br />is_true([0]);               // true<br />is_true(42);                // true<br />is_true(-42);               // true<br />is_true('true');            // true<br />is_true('on')               // true<br />is_true('off')              // false<br />is_true('yes')              // true<br />is_true('no')               // false<br />is_true('ja')               // false<br />is_true('nein')             // false<br />is_true('1');               // true<br />is_true(NULL);              // false<br />is_true(0);                 // false<br />is_true('false');           // false<br />is_true('string');          // false<br />is_true('0.0');             // false<br />is_true('4.2');             // false<br />is_true('0');               // false<br />is_true('');                // false<br />is_true([]);                // false</span></code></div>
  </div>
 </div>
  <div class="note" id="115017">  <div class="votes">
    <div id="Vu115017">
    <a href="/manual/vote-note.php?id=115017&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115017">
    <a href="/manual/vote-note.php?id=115017&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115017" title="68% like this...">
    23
    </div>
  </div>
  <a href="#115017" class="name">
  <strong class="user"><em>Babak Bandpey</em></strong></a><a class="genanchor" href="#115017"> &para;</a><div class="date" title="2014-05-13 09:14"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115017">
<div class="phpcode"><code><span class="html">I believe that the double negation !! can perform the same task with the same result if your PHP is not up2date<br /><br />var_dump(!!1, !!0, !!"test", !!"");<br /><br />outputs:<br />boolean true<br /><br />boolean false<br /><br />boolean true<br /><br />boolean false<br /><br />May the life be good to you.</span></code></div>
  </div>
 </div>
  <div class="note" id="124657">  <div class="votes">
    <div id="Vu124657">
    <a href="/manual/vote-note.php?id=124657&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124657">
    <a href="/manual/vote-note.php?id=124657&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124657" title="69% like this...">
    9
    </div>
  </div>
  <a href="#124657" class="name">
  <strong class="user"><em>uasenior at gmail dot com</em></strong></a><a class="genanchor" href="#124657"> &para;</a><div class="date" title="2020-01-28 08:02"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124657">
<div class="phpcode"><code><span class="html">&lt;?<br /><br />// Some way to print boolean value as string<br /><br />$b = true;<br /><br />echo ['false', 'true'][$b];<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="114013">  <div class="votes">
    <div id="Vu114013">
    <a href="/manual/vote-note.php?id=114013&amp;page=function.boolval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114013">
    <a href="/manual/vote-note.php?id=114013&amp;page=function.boolval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114013" title="46% like this...">
    -4
    </div>
  </div>
  <a href="#114013" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#114013"> &para;</a><div class="date" title="2013-12-30 05:12"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114013">
<div class="phpcode"><code><span class="html">A misspell in v2.0. <br />:-)<br /><br />Hack v2.1<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if( ! </span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'boolval'</span><span class="keyword">))<br />{<br />    </span><span class="comment">/**<br />     * Get the boolean value of a variable<br />     *<br />     * @param mixed The scalar value being converted to a boolean.<br />     * @return boolean The boolean value of var.<br />     */<br />    </span><span class="keyword">function </span><span class="default">boolval</span><span class="keyword">(</span><span class="default">$var</span><span class="keyword">)<br />    {<br />        return !! </span><span class="default">$var</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.boolval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.boolval.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
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
                                                <li class="">
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
